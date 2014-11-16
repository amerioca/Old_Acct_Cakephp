<?php
App::uses('AppController', 'Controller');
/**
 * BarcodesProducts Controller
 *
 * @property BarcodesProduct $BarcodesProduct
 * @property PaginatorComponent $Paginator
 */
class BarcodesProductsController extends AppController {

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
		$this->BarcodesProduct->recursive = 0;
		$this->set('barcodesProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BarcodesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid barcodes product'));
		}
		$options = array('conditions' => array('BarcodesProduct.' . $this->BarcodesProduct->primaryKey => $id));
		$this->set('barcodesProduct', $this->BarcodesProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BarcodesProduct->create();
			if ($this->BarcodesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The barcodes product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barcodes product could not be saved. Please, try again.'));
			}
		}
		$barcodes = $this->BarcodesProduct->Barcode->find('list');
		$products = $this->BarcodesProduct->Product->find('list');
		$this->set(compact('barcodes', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BarcodesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid barcodes product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BarcodesProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The barcodes product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barcodes product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BarcodesProduct.' . $this->BarcodesProduct->primaryKey => $id));
			$this->request->data = $this->BarcodesProduct->find('first', $options);
		}
		$barcodes = $this->BarcodesProduct->Barcode->find('list');
		$products = $this->BarcodesProduct->Product->find('list');
		$this->set(compact('barcodes', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BarcodesProduct->id = $id;
		if (!$this->BarcodesProduct->exists()) {
			throw new NotFoundException(__('Invalid barcodes product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BarcodesProduct->delete()) {
			$this->Session->setFlash(__('The barcodes product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The barcodes product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
