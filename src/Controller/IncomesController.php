<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Incomes Controller
 *
 * @property \App\Model\Table\IncomesTable $Incomes
 */
class IncomesController extends AppController
{

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		if (in_array($this->request->action, ["search"], true)) {
			return;
		}
		$this->Flash->error('この機能はまだ使えません...');
		return $this->redirect(
			['controller' => 'Pages', 'action' => 'display', 'under_construction']
		);
	}

    /**
     * Search method
     *
     * @return \Cake\Network\Response|null
     */
    public function search()
    {
			//こどものカナ頭文字を取得する(capとして)
			$children = $this->Incomes->Children->find()
				->contain([])
				->select(['cap' => 'LEFT(Children.kana, 1)'])
				->where(['kana IS NOT' => null, 'kana NOT LIKE' => ''])
				->group(['cap'])
				->order(['cap'])
				->all()
				->toArray();
			$caps = [];
			foreach ($children as $item) {
				$caps []= "'".$item->cap."'";
			}
			$capsStr = '';
			if (count($caps) > 0) {
				$seion = implode(',', $caps);
				$seion = mb_convert_kana($seion, 'hk');  //半角カタカナにする
				$seion = mb_ereg_replace('ﾞ|ﾟ', '', $seion);  //半角カタカナにすると濁点や半濁点が一時になるので消去
				$capsStr = mb_convert_kana($seion, 'H');  //全角ひらがなする
			}
			$this->set(compact('caps', 'capsStr'));
    }

		/**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Children', 'Guardians', 'Staffs']
        ];
        $incomes = $this->paginate($this->Incomes);

        $this->set(compact('incomes'));
        $this->set('_serialize', ['incomes']);
    }

    /**
     * View method
     *
     * @param string|null $id Income id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $income = $this->Incomes->get($id, [
            'contain' => ['Children', 'Guardians', 'Staffs']
        ]);

        $this->set('income', $income);
        $this->set('_serialize', ['income']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $income = $this->Incomes->newEntity();
        if ($this->request->is('post')) {
            $income = $this->Incomes->patchEntity($income, $this->request->data);
            if ($this->Incomes->save($income)) {
                $this->Flash->success(__('The income has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The income could not be saved. Please, try again.'));
            }
        }
        $children = $this->Incomes->Children->find('list', ['limit' => 200]);
        $guardians = $this->Incomes->Guardians->find('list', ['limit' => 200]);
        $staffs = $this->Incomes->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('income', 'children', 'guardians', 'staffs'));
        $this->set('_serialize', ['income']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Income id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $income = $this->Incomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $income = $this->Incomes->patchEntity($income, $this->request->data);
            if ($this->Incomes->save($income)) {
                $this->Flash->success(__('The income has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The income could not be saved. Please, try again.'));
            }
        }
        $children = $this->Incomes->Children->find('list', ['limit' => 200]);
        $guardians = $this->Incomes->Guardians->find('list', ['limit' => 200]);
        $staffs = $this->Incomes->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('income', 'children', 'guardians', 'staffs'));
        $this->set('_serialize', ['income']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Income id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $income = $this->Incomes->get($id);
        if ($this->Incomes->delete($income)) {
            $this->Flash->success(__('The income has been deleted.'));
        } else {
            $this->Flash->error(__('The income could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
