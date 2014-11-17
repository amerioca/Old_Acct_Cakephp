<?php
App::uses('AppController', 'Controller');
/**
 * ProductBarcodes Controller
 *
 * @property ProductBarcode $ProductBarcode
 * @property PaginatorComponent $Paginator
 */
class ProductBarcodesController extends AppController {

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
		$this->ProductBarcode->recursive = 0;
		$this->set('productBarcodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductBarcode->exists($id)) {
			throw new NotFoundException(__('Invalid product barcode'));
		}
		$options = array('conditions' => array('ProductBarcode.' . $this->ProductBarcode->primaryKey => $id));
		$this->set('productBarcode', $this->ProductBarcode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductBarcode->create();
			if ($this->ProductBarcode->save($this->request->data)) {
				$this->Session->setFlash(__('The product barcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product barcode could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductBarcode->Product->find('list', array('order'=>array('Product.name ASC')));
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductBarcode->exists($id)) {
			throw new NotFoundException(__('Invalid product barcode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductBarcode->save($this->request->data)) {
				$this->Session->setFlash(__('The product barcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product barcode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductBarcode.' . $this->ProductBarcode->primaryKey => $id));
			$this->request->data = $this->ProductBarcode->find('first', $options);
		}
		$products = $this->ProductBarcode->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductBarcode->id = $id;
		if (!$this->ProductBarcode->exists()) {
			throw new NotFoundException(__('Invalid product barcode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductBarcode->delete()) {
			$this->Session->setFlash(__('The product barcode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product barcode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
