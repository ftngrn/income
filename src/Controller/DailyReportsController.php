<?php
namespace App\Controller;

use App\Controller\AppController;

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
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The daily report could not be saved. Please, try again.'));
            }
        } else if (is_numeric($this->request->query['source'])) {
					$dailyReport = $this->DailyReports->get(intVal($this->request->query['source']), [
						'contain' => []
					]);
					unset(
						$dailyReport->date,
						$dailyReport->report,
						$dailyReport->problem,
						$dailyReport->injury,
						$dailyReport->movement,
						$dailyReport->distribution
					);
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
                return $this->redirect(['action' => 'index']);
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
        return $this->redirect(['action' => 'index']);
    }
}
