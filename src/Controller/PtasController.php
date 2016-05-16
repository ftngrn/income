<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ptas Controller
 *
 * @property \App\Model\Table\PtasTable $Ptas
 */
class PtasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Guardians', 'Children']
        ];
        $ptas = $this->paginate($this->Ptas);

        $this->set(compact('ptas'));
        $this->set('_serialize', ['ptas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pta = $this->Ptas->get($id, [
            'contain' => ['Guardians', 'Children']
        ]);

        $this->set('pta', $pta);
        $this->set('_serialize', ['pta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pta = $this->Ptas->newEntity();
        if ($this->request->is('post')) {
            $pta = $this->Ptas->patchEntity($pta, $this->request->data);
            if ($this->Ptas->save($pta)) {
                $this->Flash->success(__('The pta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pta could not be saved. Please, try again.'));
            }
        }
        $guardians = $this->Ptas->Guardians->find('list', ['limit' => 200]);
        $children = $this->Ptas->Children->find('list', ['limit' => 200]);
        $this->set(compact('pta', 'guardians', 'children'));
        $this->set('_serialize', ['pta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pta = $this->Ptas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pta = $this->Ptas->patchEntity($pta, $this->request->data);
            if ($this->Ptas->save($pta)) {
                $this->Flash->success(__('The pta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pta could not be saved. Please, try again.'));
            }
        }
        $guardians = $this->Ptas->Guardians->find('list', ['limit' => 200]);
        $children = $this->Ptas->Children->find('list', ['limit' => 200]);
        $this->set(compact('pta', 'guardians', 'children'));
        $this->set('_serialize', ['pta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pta = $this->Ptas->get($id);
        if ($this->Ptas->delete($pta)) {
            $this->Flash->success(__('The pta has been deleted.'));
        } else {
            $this->Flash->error(__('The pta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
