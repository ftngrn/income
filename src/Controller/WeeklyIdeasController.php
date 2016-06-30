<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * WeeklyIdeas Controller
 *
 * @property \App\Model\Table\WeeklyIdeasTable $WeeklyIdeas
 */
class WeeklyIdeasController extends AppController
{

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Flash->error('この機能はまだ使えません...');
		return $this->redirect(
			['controller' => 'Pages', 'action' => 'display', 'under_construction']
		);
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs']
        ];
        $weeklyIdeas = $this->paginate($this->WeeklyIdeas);

        $this->set(compact('weeklyIdeas'));
        $this->set('_serialize', ['weeklyIdeas']);
    }

    /**
     * View method
     *
     * @param string|null $id Weekly Idea id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weeklyIdea = $this->WeeklyIdeas->get($id, [
            'contain' => ['Staffs', 'WeeklyIdeaDetails']
        ]);

        $this->set('weeklyIdea', $weeklyIdea);
        $this->set('_serialize', ['weeklyIdea']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weeklyIdea = $this->WeeklyIdeas->newEntity();
        if ($this->request->is('post')) {
            $weeklyIdea = $this->WeeklyIdeas->patchEntity($weeklyIdea, $this->request->data);
            if ($this->WeeklyIdeas->save($weeklyIdea)) {
                $this->Flash->success(__('The weekly idea has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly idea could not be saved. Please, try again.'));
            }
        }
        $staffs = $this->WeeklyIdeas->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('weeklyIdea', 'staffs'));
        $this->set('_serialize', ['weeklyIdea']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weekly Idea id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weeklyIdea = $this->WeeklyIdeas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weeklyIdea = $this->WeeklyIdeas->patchEntity($weeklyIdea, $this->request->data);
            if ($this->WeeklyIdeas->save($weeklyIdea)) {
                $this->Flash->success(__('The weekly idea has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly idea could not be saved. Please, try again.'));
            }
        }
        $staffs = $this->WeeklyIdeas->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('weeklyIdea', 'staffs'));
        $this->set('_serialize', ['weeklyIdea']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weekly Idea id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weeklyIdea = $this->WeeklyIdeas->get($id);
        if ($this->WeeklyIdeas->delete($weeklyIdea)) {
            $this->Flash->success(__('The weekly idea has been deleted.'));
        } else {
            $this->Flash->error(__('The weekly idea could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
