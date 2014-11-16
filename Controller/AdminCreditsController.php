<?php
App::uses('AppController', 'Controller');
/**
 * AdminCredits Controller
 *
 * @property AdminCredit $AdminCredit
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdminCreditsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AdminCredit->recursive = 0;
		$this->set('adminCredits', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AdminCredit->exists($id)) {
			throw new NotFoundException(__('Invalid admin credit'));
		}
		$options = array('conditions' => array('AdminCredit.' . $this->AdminCredit->primaryKey => $id));
		$this->set('adminCredit', $this->AdminCredit->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AdminCredit->create();
			if ($this->AdminCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The admin credit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin credit could not be saved. Please, try again.'));
			}
		}
		$users = $this->AdminCredit->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AdminCredit->exists($id)) {
			throw new NotFoundException(__('Invalid admin credit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdminCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The admin credit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin credit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdminCredit.' . $this->AdminCredit->primaryKey => $id));
			$this->request->data = $this->AdminCredit->find('first', $options);
		}
		$users = $this->AdminCredit->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AdminCredit->id = $id;
		if (!$this->AdminCredit->exists()) {
			throw new NotFoundException(__('Invalid admin credit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdminCredit->delete()) {
			$this->Session->setFlash(__('The admin credit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The admin credit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
