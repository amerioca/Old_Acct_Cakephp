<?php
App::uses('AppController', 'Controller');
/**
 * Promoters Controller
 *
 * @property Promoter $Promoter
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PromotersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Promoter->recursive = 0;
		$this->set('promoters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Promoter->exists($id)) {
			throw new NotFoundException(__('Invalid promoter'));
		}
		$options = array('conditions' => array('Promoter.' . $this->Promoter->primaryKey => $id));
		$this->set('promoter', $this->Promoter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promoter->create();
			if ($this->Promoter->save($this->request->data)) {
				$this->Session->setFlash(__('The promoter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promoter could not be saved. Please, try again.'));
			}
		}
		$userGroups = $this->Promoter->UserGroup->find('list');
		$discounts = $this->Promoter->Discount->find('list');
		$credits = $this->Promoter->Credit->find('list');
		$this->set(compact('userGroups', 'discounts', 'credits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Promoter->exists($id)) {
			throw new NotFoundException(__('Invalid promoter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promoter->save($this->request->data)) {
				$this->Session->setFlash(__('The promoter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promoter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Promoter.' . $this->Promoter->primaryKey => $id));
			$this->request->data = $this->Promoter->find('first', $options);
		}
		$userGroups = $this->Promoter->UserGroup->find('list');
		$discounts = $this->Promoter->Discount->find('list');
		$credits = $this->Promoter->Credit->find('list');
		$this->set(compact('userGroups', 'discounts', 'credits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promoter->id = $id;
		if (!$this->Promoter->exists()) {
			throw new NotFoundException(__('Invalid promoter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Promoter->delete()) {
			$this->Session->setFlash(__('The promoter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The promoter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
