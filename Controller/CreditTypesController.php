<?php
App::uses('AppController', 'Controller');
/**
 * CreditTypes Controller
 *
 * @property CreditType $CreditType
 * @property PaginatorComponent $Paginator
 */
class CreditTypesController extends AppController {

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
		$this->CreditType->recursive = 0;
		$this->set('creditTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CreditType->exists($id)) {
			throw new NotFoundException(__('Invalid credit type'));
		}
		$options = array('conditions' => array('CreditType.' . $this->CreditType->primaryKey => $id));
		$this->set('creditType', $this->CreditType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CreditType->create();
			if ($this->CreditType->save($this->request->data)) {
				$this->Session->setFlash(__('The credit type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CreditType->exists($id)) {
			throw new NotFoundException(__('Invalid credit type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CreditType->save($this->request->data)) {
				$this->Session->setFlash(__('The credit type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CreditType.' . $this->CreditType->primaryKey => $id));
			$this->request->data = $this->CreditType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CreditType->id = $id;
		if (!$this->CreditType->exists()) {
			throw new NotFoundException(__('Invalid credit type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CreditType->delete()) {
			$this->Session->setFlash(__('The credit type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The credit type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
