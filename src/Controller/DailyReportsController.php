<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * DailyReports Controller
 *
 * @property \App\Model\Table\DailyReportsTable $DailyReports
 */
class DailyReportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
					'limit' => 20,
					'order' => [
						'DailyReports.date' => 'desc'
					],
					'contain' => ['Staffs']
        ];
        $dailyReports = $this->paginate($this->DailyReports);

        $this->set(compact('dailyReports'));
        $this->set('week_day', Configure::read('Income.list.week'));
        $this->set('_serialize', ['dailyReports']);
    }

	/**
	 * Mine	method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function mine()
	{
		$user_id = $this->Auth->user()['id'];
		$this->paginate = [
			'limit' => 20,
			'conditions' => [
				'DailyReports.staff_id' => $user_id,
			],
			'order' => [
				'DailyReports.date' => 'desc'
			],
			'contain' => ['Staffs']
		];
		$dailyReports = $this->paginate($this->DailyReports);
		$this->viewBuilder()->template('index');
		$this->set(compact('dailyReports'));
		$this->set('week_day', Configure::read('Income.list.week'));
		$this->set('_serialize', ['dailyReports']);
	}

    /**
     * View method
     *
     * @param string|null $id Daily Report id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailyReport = $this->DailyReports->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('dailyReport', $dailyReport);
        $this->set('_serialize', ['dailyReport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailyReport = $this->DailyReports->newEntity();
        if ($this->request->is('post')) {
            $dailyReport = $this->DailyReports->patchEntity($dailyReport, $this->request->data);
            if ($this->DailyReports->save($dailyReport)) {
                $this->Flash->success(__('The daily report has been saved.'));
                return $this->redirect(['action' => 'mine']);
            } else {
                $this->Flash->error(__('The daily report could not be saved. Please, try again.'));
            }
        } else
				if (isset($this->request->query['source']) && is_numeric($this->request->query['source'])) {
					$agenda_for_teacher =<<<_EOT_
|時刻|内容|
|---:|----|
|8:30|登園・身支度・自由遊び|
|9:50|片付け|
|10:10|朝の会|
|10:20|主な活動|
|11:30|昼食|
|13:30|片付け・身支度・帰りの会|
|14:00|降園|
_EOT_;

					//再利用するために指定されたIDのデータを取得
					$source = $this->DailyReports->get(intVal($this->request->query['source']), [
						'contain' => []
					]);
					//新しいEntityに代入する（直接$sourceをViewに渡すとmethod=PUTになってしまい新規作成できない）
					$dailyReport = $this->DailyReports->newEntity();
					$dailyReport->set([
						'room' => $source->room,
						'staff_id' => $source->staff_id,
						'activity' => $source->activity,
						'objective' => $source->objective,
						'agenda' => $source->agenda,
//						'agenda' => $agenda_for_teacher,
						'gist' => $source->gist,
					]);
				}
        $staffs = $this->DailyReports->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('dailyReport', 'staffs'));
        $this->set('_serialize', ['dailyReport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Daily Report id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailyReport = $this->DailyReports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailyReport = $this->DailyReports->patchEntity($dailyReport, $this->request->data);
            if ($this->DailyReports->save($dailyReport)) {
                $this->Flash->success(__('The daily report has been saved.'));
                return $this->redirect(['action' => 'mine']);
            } else {
                $this->Flash->error(__('The daily report could not be saved. Please, try again.'));
            }
        }
        $staffs = $this->DailyReports->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('dailyReport', 'staffs'));
        $this->set('_serialize', ['dailyReport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Daily Report id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailyReport = $this->DailyReports->get($id);
        if ($this->DailyReports->delete($dailyReport)) {
            $this->Flash->success(__('The daily report has been deleted.'));
        } else {
            $this->Flash->error(__('The daily report could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'mine']);
    }
}
