<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WeeklyIdeaDetails Controller
 *
 * @property \App\Model\Table\WeeklyIdeaDetailsTable $WeeklyIdeaDetails
 */
class WeeklyIdeaDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Weeklyeas']
        ];
        $weeklyIdeaDetails = $this->paginate($this->WeeklyIdeaDetails);

        $this->set(compact('weeklyIdeaDetails'));
        $this->set('_serialize', ['weeklyIdeaDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Weekly Idea Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weeklyIdeaDetail = $this->WeeklyIdeaDetails->get($id, [
            'contain' => ['Weeklyeas']
        ]);

        $this->set('weeklyIdeaDetail', $weeklyIdeaDetail);
        $this->set('_serialize', ['weeklyIdeaDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weeklyIdeaDetail = $this->WeeklyIdeaDetails->newEntity();
        if ($this->request->is('post')) {
            $weeklyIdeaDetail = $this->WeeklyIdeaDetails->patchEntity($weeklyIdeaDetail, $this->request->data);
            if ($this->WeeklyIdeaDetails->save($weeklyIdeaDetail)) {
                $this->Flash->success(__('The weekly idea detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly idea detail could not be saved. Please, try again.'));
            }
        }
        $weeklyeas = $this->WeeklyIdeaDetails->Weeklyeas->find('list', ['limit' => 200]);
        $this->set(compact('weeklyIdeaDetail', 'weeklyeas'));
        $this->set('_serialize', ['weeklyIdeaDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weekly Idea Detail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weeklyIdeaDetail = $this->WeeklyIdeaDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weeklyIdeaDetail = $this->WeeklyIdeaDetails->patchEntity($weeklyIdeaDetail, $this->request->data);
            if ($this->WeeklyIdeaDetails->save($weeklyIdeaDetail)) {
                $this->Flash->success(__('The weekly idea detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly idea detail could not be saved. Please, try again.'));
            }
        }
        $weeklyeas = $this->WeeklyIdeaDetails->Weeklyeas->find('list', ['limit' => 200]);
        $this->set(compact('weeklyIdeaDetail', 'weeklyeas'));
        $this->set('_serialize', ['weeklyIdeaDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weekly Idea Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weeklyIdeaDetail = $this->WeeklyIdeaDetails->get($id);
        if ($this->WeeklyIdeaDetails->delete($weeklyIdeaDetail)) {
            $this->Flash->success(__('The weekly idea detail has been deleted.'));
        } else {
            $this->Flash->error(__('The weekly idea detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
