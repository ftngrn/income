<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChildParents Controller
 *
 * @property \App\Model\Table\ChildParentsTable $ChildParents
 */
class ChildParentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $childParents = $this->paginate($this->ChildParents);

        $this->set(compact('childParents'));
        $this->set('_serialize', ['childParents']);
    }

    /**
     * View method
     *
     * @param string|null $id Child Parent id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $childParent = $this->ChildParents->get($id, [
            'contain' => ['Busstops', 'ChildHealths', 'ChildMedications', 'Incomes', 'Journals', 'Ptas']
        ]);

        $this->set('childParent', $childParent);
        $this->set('_serialize', ['childParent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $childParent = $this->ChildParents->newEntity();
        if ($this->request->is('post')) {
            $childParent = $this->ChildParents->patchEntity($childParent, $this->request->data);
            if ($this->ChildParents->save($childParent)) {
                $this->Flash->success(__('The child parent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child parent could not be saved. Please, try again.'));
            }
        }
        $busstops = $this->ChildParents->Busstops->find('list', ['limit' => 200]);
        $this->set(compact('childParent', 'busstops'));
        $this->set('_serialize', ['childParent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Child Parent id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $childParent = $this->ChildParents->get($id, [
            'contain' => ['Busstops']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $childParent = $this->ChildParents->patchEntity($childParent, $this->request->data);
            if ($this->ChildParents->save($childParent)) {
                $this->Flash->success(__('The child parent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child parent could not be saved. Please, try again.'));
            }
        }
        $busstops = $this->ChildParents->Busstops->find('list', ['limit' => 200]);
        $this->set(compact('childParent', 'busstops'));
        $this->set('_serialize', ['childParent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Child Parent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $childParent = $this->ChildParents->get($id);
        if ($this->ChildParents->delete($childParent)) {
            $this->Flash->success(__('The child parent has been deleted.'));
        } else {
            $this->Flash->error(__('The child parent could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
