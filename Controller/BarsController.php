<?php
App::uses('AppController', 'Controller');
/**
 * Bars Controller
 *
 * @property Bar $Bar
 * @property PaginatorComponent $Paginator
 */
class BarsController extends AppController {

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
		$this->Bar->recursive = 0;
		$this->set('bars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bar->exists($id)) {
			throw new NotFoundException(__('Invalid bar'));
		}
		$options = array('conditions' => array('Bar.' . $this->Bar->primaryKey => $id));
		$this->set('bar', $this->Bar->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bar->create();
			if ($this->Bar->save($this->request->data)) {
				$this->Session->setFlash(__('The bar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bar could not be saved. Please, try again.'));
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
		if (!$this->Bar->exists($id)) {
			throw new NotFoundException(__('Invalid bar'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bar->save($this->request->data)) {
				$this->Session->setFlash(__('The bar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bar could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bar.' . $this->Bar->primaryKey => $id));
			$this->request->data = $this->Bar->find('first', $options);
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
		$this->Bar->id = $id;
		if (!$this->Bar->exists()) {
			throw new NotFoundException(__('Invalid bar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bar->delete()) {
			$this->Session->setFlash(__('The bar has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bar could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
