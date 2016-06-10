<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * Children Controller
 *
 * @property \App\Model\Table\ChildrenTable $Children
 */
class ChildrenController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Guardians'],
			'order' => ['joined' => 'desc'],
		];
		$children = $this->paginate($this->Children);

		$this->set(compact('children'));
		$this->set('_serialize', ['children']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Child id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$child = $this->Children->get($id, [
			'contain' => ['Guardians', 'ChildHealths', 'ChildMedications', 'Incomes', 'Ptas']
		]);

		$this->set('child', $child);
		$this->set('_serialize', ['child']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$child = $this->Children->newEntity();
		if ($this->request->is('post')) {
			$child = $this->Children->patchEntity($child, $this->request->data);
			if ($this->Children->save($child)) {
				$this->Flash->success(__('The child has been saved.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The child could not be saved. Please, try again.'));
			}
		}
		$guardians = $this->Children->Guardians->find('list', ['limit' => 300, 'order' => 'id DESC']);
		$this->set(compact('child', 'guardians'));
		$this->set('_serialize', ['child']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Child id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$child = $this->Children->get($id, [
			'contain' => ['Photos']
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$photos = $child->photos;
			if (!empty($photos) && count($photos) > 0) {
				$this->request->data['photos'][0]['id'] = $photos[0]['id'];
			}
			$child = $this->Children->patchEntity($child, $this->request->data);
			if ($this->Children->save($child)) {
				$this->Flash->success(__('The child has been saved.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The child could not be saved. Please, try again.'));
			}
		}
		$guardians = $this->Children->Guardians->find('list', ['limit' => 300, 'order' => 'id DESC']);
		$this->set(compact('child', 'guardians'));
		$this->set('sexs', Configure::read('Income.hash.sex'));
		$this->set('schools', Configure::read('Income.hash.school'));
		$this->set('rooms', Configure::read('Income.hash.room'));
		$this->set('buses', Configure::read('Income.hash.bus'));
		$this->set('courses', Configure::read('Income.hash.course'));
		$this->set('grades', Configure::read('Income.hash.grade'));
		$this->set('_serialize', ['child']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Child id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$child = $this->Children->get($id);
		if ($this->Children->delete($child)) {
			$this->Flash->success(__('The child has been deleted.'));
		} else {
			$this->Flash->error(__('The child could not be deleted. Please, try again.'));
		}
		return $this->redirect(['action' => 'index']);
	}
}
