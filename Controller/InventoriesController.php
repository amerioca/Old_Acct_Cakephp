<?php
App::uses('AppController', 'Controller', 'CakeNumber', 'Utility');
/**
 * Inventories Controller
 *
 * @property Inventory $Inventory
 * @property PaginatorComponent $Paginator
 */
class InventoriesController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Inventory', 'ProductBarcode');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Inventory->recursive = 0;
        $this->set('inventories', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Inventory->exists($id)) {
            throw new NotFoundException(__('Invalid inventory'));
        }
        $options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
        $this->set('inventory', $this->Inventory->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Inventory->create();
            if ($this->Inventory->save($this->request->data)) {
                $this->Session->setFlash(__('The inventory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inventory could not be saved. Please, try again.'));
            }
        }
        $products = $this->Inventory->Product->find('list');
        $items = $this->Inventory->Item->find('list');
        $this->set(compact('products', 'items'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->Inventory->exists($id)) {
            throw new NotFoundException(__('Invalid inventory'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Inventory->save($this->request->data)) {
                $this->Session->setFlash(__('The inventory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inventory could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
            $this->request->data = $this->Inventory->find('first', $options);
        }
        $products = $this->Inventory->Product->find('list');
        $items = $this->Inventory->Item->find('list');
        $this->set(compact('products', 'items'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Inventory->id = $id;
        if (!$this->Inventory->exists()) {
            throw new NotFoundException(__('Invalid inventory'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Inventory->delete()) {
            $this->Session->setFlash(__('The inventory has been deleted.'));
        } else {
            $this->Session->setFlash(__('The inventory could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function checkin()
    {
        if ($this->request->data) {
            $data = $this->request->data;
            unset($data['ProductBarcode']);
            //debug($data); die;
            if(@$this->request->data['Insert']['confirmed']){ debug($data);
                for($i=0; $i<$this->request->data['Insert']['quantity']; $i++){
                    //debug($data);
                    $this->Inventory->create();
                    $this->Inventory->save($data);
                }
                $this->Session->setFlash($this->request->data['Insert']['quantity'] . __(' Inventory item(s) added with success'));

            }
            else if ($product = $this->Inventory->Product->ProductBarcode->find('first', array(
                    'conditions' => array('ProductBarcode.barcode' => $this->request->data['ProductBarcode']['barcode']))
            )
            ) {
                //debug($this->request->data);
                $total = $this->request->data['Insert']['quantity'] * $this->request->data['Inventory']['cost'];

                $this->set(compact('product', 'total', 'data'));
                //debug($product);


                $this->render('confirm');
            } else {
                $this->Session->setFlash(__('Barcode Not in Database'));
                $this->redirect('/ProductBarcodes/add/'.$this->request->data['ProductBarcode']['barcode']);
            }
        }
        $products = $this->Inventory->Product->find('list', array('order'=>array('name')));
        $items = $this->Inventory->Item->find('list');
        $this->set(compact('products', 'items'));
    }

    public function confirm()
    {
        debug($this->product);
    }
}
