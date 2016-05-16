<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChildMedicationHistories Controller
 *
 * @property \App\Model\Table\ChildMedicationHistoriesTable $ChildMedicationHistories
 */
class ChildMedicationHistoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ChildMedications', 'Staffs']
        ];
        $childMedicationHistories = $this->paginate($this->ChildMedicationHistories);

        $this->set(compact('childMedicationHistories'));
        $this->set('_serialize', ['childMedicationHistories']);
    }

    /**
     * View method
     *
     * @param string|null $id Child Medication History id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $childMedicationHistory = $this->ChildMedicationHistories->get($id, [
            'contain' => ['ChildMedications', 'Staffs']
        ]);

        $this->set('childMedicationHistory', $childMedicationHistory);
        $this->set('_serialize', ['childMedicationHistory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $childMedicationHistory = $this->ChildMedicationHistories->newEntity();
        if ($this->request->is('post')) {
            $childMedicationHistory = $this->ChildMedicationHistories->patchEntity($childMedicationHistory, $this->request->data);
            if ($this->ChildMedicationHistories->save($childMedicationHistory)) {
                $this->Flash->success(__('The child medication history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child medication history could not be saved. Please, try again.'));
            }
        }
        $childMedications = $this->ChildMedicationHistories->ChildMedications->find('list', ['limit' => 200]);
        $staffs = $this->ChildMedicationHistories->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('childMedicationHistory', 'childMedications', 'staffs'));
        $this->set('_serialize', ['childMedicationHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Child Medication History id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $childMedicationHistory = $this->ChildMedicationHistories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $childMedicationHistory = $this->ChildMedicationHistories->patchEntity($childMedicationHistory, $this->request->data);
            if ($this->ChildMedicationHistories->save($childMedicationHistory)) {
                $this->Flash->success(__('The child medication history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The child medication history could not be saved. Please, try again.'));
            }
        }
        $childMedications = $this->ChildMedicationHistories->ChildMedications->find('list', ['limit' => 200]);
        $staffs = $this->ChildMedicationHistories->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('childMedicationHistory', 'childMedications', 'staffs'));
        $this->set('_serialize', ['childMedicationHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Child Medication History id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $childMedicationHistory = $this->ChildMedicationHistories->get($id);
        if ($this->ChildMedicationHistories->delete($childMedicationHistory)) {
            $this->Flash->success(__('The child medication history has been deleted.'));
        } else {
            $this->Flash->error(__('The child medication history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
