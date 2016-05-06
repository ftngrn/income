<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Busstops Controller
 *
 * @property \App\Model\Table\BusstopsTable $Busstops
 */
class BusstopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $busstops = $this->paginate($this->Busstops);

        $this->set(compact('busstops'));
        $this->set('_serialize', ['busstops']);
    }

    /**
     * View method
     *
     * @param string|null $id Busstop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busstop = $this->Busstops->get($id, [
            'contain' => ['BusstopsChildParents']
        ]);

        $this->set('busstop', $busstop);
        $this->set('_serialize', ['busstop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busstop = $this->Busstops->newEntity();
        if ($this->request->is('post')) {
            $busstop = $this->Busstops->patchEntity($busstop, $this->request->data);
            if ($this->Busstops->save($busstop)) {
                $this->Flash->success(__('The busstop has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The busstop could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('busstop'));
        $this->set('_serialize', ['busstop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Busstop id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busstop = $this->Busstops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busstop = $this->Busstops->patchEntity($busstop, $this->request->data);
            if ($this->Busstops->save($busstop)) {
                $this->Flash->success(__('The busstop has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The busstop could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('busstop'));
        $this->set('_serialize', ['busstop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Busstop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busstop = $this->Busstops->get($id);
        if ($this->Busstops->delete($busstop)) {
            $this->Flash->success(__('The busstop has been deleted.'));
        } else {
            $this->Flash->error(__('The busstop could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
