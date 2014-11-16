<?php
App::uses('AppController', 'Controller');
/**
 * DiscountsUsers Controller
 *
 * @property DiscountsUser $DiscountsUser
 * @property PaginatorComponent $Paginator
 */
class DiscountsUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DiscountsUser->recursive = 0;
		$this->set('discountsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DiscountsUser->exists($id)) {
			throw new NotFoundException(__('Invalid discounts user'));
		}
		$options = array('conditions' => array('DiscountsUser.' . $this->DiscountsUser->primaryKey => $id));
		$this->set('discountsUser', $this->DiscountsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DiscountsUser->create();
			if ($this->DiscountsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The discounts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discounts user could not be saved. Please, try again.'));
			}
		}
		$discounts = $this->DiscountsUser->Discount->find('list');
		$users = $this->DiscountsUser->User->find('list');
		$this->set(compact('discounts', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DiscountsUser->exists($id)) {
			throw new NotFoundException(__('Invalid discounts user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DiscountsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The discounts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discounts user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscountsUser.' . $this->DiscountsUser->primaryKey => $id));
			$this->request->data = $this->DiscountsUser->find('first', $options);
		}
		$discounts = $this->DiscountsUser->Discount->find('list');
		$users = $this->DiscountsUser->User->find('list');
		$this->set(compact('discounts', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DiscountsUser->id = $id;
		if (!$this->DiscountsUser->exists()) {
			throw new NotFoundException(__('Invalid discounts user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DiscountsUser->delete()) {
			$this->Session->setFlash(__('The discounts user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The discounts user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
