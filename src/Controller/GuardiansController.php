<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Guardians Controller
 *
 * @property \App\Model\Table\GuardiansTable $Guardians
 */
class GuardiansController extends AppController
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
        $guardians = $this->paginate($this->Guardians);

        $this->set(compact('guardians'));
        $this->set('_serialize', ['guardians']);
    }

    /**
     * View method
     *
     * @param string|null $id Guardian id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guardian = $this->Guardians->get($id, [
            'contain' => ['Busstops', 'ChildHealths', 'ChildMedications', 'Children', 'Incomes', 'Journals', 'Ptas']
        ]);

        $this->set('guardian', $guardian);
        $this->set('_serialize', ['guardian']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guardian = $this->Guardians->newEntity();
        if ($this->request->is('post')) {
            $guardian = $this->Guardians->patchEntity($guardian, $this->request->data);
            if ($this->Guardians->save($guardian)) {
                $this->Flash->success(__('The guardian has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guardian could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guardian'));
        $this->set('_serialize', ['guardian']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Guardian id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guardian = $this->Guardians->get($id, [
            'contain' => ['Busstops']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guardian = $this->Guardians->patchEntity($guardian, $this->request->data);
            if ($this->Guardians->save($guardian)) {
                $this->Flash->success(__('The guardian has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guardian could not be saved. Please, try again.'));
            }
        }
        $busstops = $this->Guardians->Busstops->find('list', ['limit' => 200]);
        $this->set(compact('guardian', 'busstops'));
        $this->set('_serialize', ['guardian']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Guardian id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guardian = $this->Guardians->get($id);
        if ($this->Guardians->delete($guardian)) {
            $this->Flash->success(__('The guardian has been deleted.'));
        } else {
            $this->Flash->error(__('The guardian could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
