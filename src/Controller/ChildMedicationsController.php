<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChildMedications Controller
 *
 * @property \App\Model\Table\ChildMedicationsTable $ChildMedications
 */
class ChildMedicationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Children', 'ChildParents', 'ReceivedStaffs']
        ];
        $childMedications = $this->paginate($this->ChildMedications);

        $this->set(compact('childMedications'));
        $this->set('_serialize', ['childMedications']);
    }

    /**
     * View method
     *
     * @param string|null $id Child Medication id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $childMedication = $this->ChildMedications->get($id, [
            'contain' => ['Children', 'ChildParents', 'ReceivedStaffs', 'ChildMedicationHistories']
        ]);

        $this->set('childMedication', $childMedication);
        $this->set('_serialize', ['childMedication']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $childMedication = $this->ChildMedications->newEntity();
        if ($this->request->is('post')) {
            $childMedication = $this->ChildMedications->patchEntity($childMedication, $this->request->data);
            if ($this->ChildMedications->save($childMedication)) {
                $this->Flash->success(__('The child medication has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child medication could not be saved. Please, try again.'));
            }
        }
        $children = $this->ChildMedications->Children->find('list', ['limit' => 200]);
        $childParents = $this->ChildMedications->ChildParents->find('list', ['limit' => 200]);
        $receivedStaffs = $this->ChildMedications->ReceivedStaffs->find('list', ['limit' => 200]);
        $this->set(compact('childMedication', 'children', 'childParents', 'receivedStaffs'));
        $this->set('_serialize', ['childMedication']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Child Medication id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $childMedication = $this->ChildMedications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $childMedication = $this->ChildMedications->patchEntity($childMedication, $this->request->data);
            if ($this->ChildMedications->save($childMedication)) {
                $this->Flash->success(__('The child medication has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child medication could not be saved. Please, try again.'));
            }
        }
        $children = $this->ChildMedications->Children->find('list', ['limit' => 200]);
        $childParents = $this->ChildMedications->ChildParents->find('list', ['limit' => 200]);
        $receivedStaffs = $this->ChildMedications->ReceivedStaffs->find('list', ['limit' => 200]);
        $this->set(compact('childMedication', 'children', 'childParents', 'receivedStaffs'));
        $this->set('_serialize', ['childMedication']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Child Medication id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $childMedication = $this->ChildMedications->get($id);
        if ($this->ChildMedications->delete($childMedication)) {
            $this->Flash->success(__('The child medication has been deleted.'));
        } else {
            $this->Flash->error(__('The child medication could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
