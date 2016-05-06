<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChildHealths Controller
 *
 * @property \App\Model\Table\ChildHealthsTable $ChildHealths
 */
class ChildHealthsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Children', 'ChildParents']
        ];
        $childHealths = $this->paginate($this->ChildHealths);

        $this->set(compact('childHealths'));
        $this->set('_serialize', ['childHealths']);
    }

    /**
     * View method
     *
     * @param string|null $id Child Health id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $childHealth = $this->ChildHealths->get($id, [
            'contain' => ['Children', 'ChildParents']
        ]);

        $this->set('childHealth', $childHealth);
        $this->set('_serialize', ['childHealth']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $childHealth = $this->ChildHealths->newEntity();
        if ($this->request->is('post')) {
            $childHealth = $this->ChildHealths->patchEntity($childHealth, $this->request->data);
            if ($this->ChildHealths->save($childHealth)) {
                $this->Flash->success(__('The child health has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child health could not be saved. Please, try again.'));
            }
        }
        $children = $this->ChildHealths->Children->find('list', ['limit' => 200]);
        $childParents = $this->ChildHealths->ChildParents->find('list', ['limit' => 200]);
        $this->set(compact('childHealth', 'children', 'childParents'));
        $this->set('_serialize', ['childHealth']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Child Health id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $childHealth = $this->ChildHealths->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $childHealth = $this->ChildHealths->patchEntity($childHealth, $this->request->data);
            if ($this->ChildHealths->save($childHealth)) {
                $this->Flash->success(__('The child health has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child health could not be saved. Please, try again.'));
            }
        }
        $children = $this->ChildHealths->Children->find('list', ['limit' => 200]);
        $childParents = $this->ChildHealths->ChildParents->find('list', ['limit' => 200]);
        $this->set(compact('childHealth', 'children', 'childParents'));
        $this->set('_serialize', ['childHealth']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Child Health id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $childHealth = $this->ChildHealths->get($id);
        if ($this->ChildHealths->delete($childHealth)) {
            $this->Flash->success(__('The child health has been deleted.'));
        } else {
            $this->Flash->error(__('The child health could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
