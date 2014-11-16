<?php
App::uses('AppController', 'Controller');
/**
 * OrderGroups Controller
 *
 * @property OrderGroup $OrderGroup
 * @property PaginatorComponent $Paginator
 */
class OrderGroupsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('OrderGroup', 'User');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->OrderGroup->recursive = 0;
        $this->set('orderGroups', $this->Paginator->paginate());
    }

    public function lists($type = null, $id = null)
    {
        switch ($type) {
            case 'order_id':
                $orders = $this->OrderGroup->Order->find('all', array('conditions' => array('order_group_id' => $id)));
                //debug($orders);
                $order = array();
                foreach ($orders as $key => $value) {

                    //debug($value);
                    if (!empty($quantity[$value['Item']['id']]['Quantity'])) {
                        $quantity[$value['Item']['id']]['Quantity']++;
                    } else { //debug($value['Item']['id']);
                        $quantity[$value['Item']['id']]['Quantity'] = 1;
                        $order[$value['Item']['id']] = $value;
                    }
                    //debug($order); debug($quantity);

                    /*
                    $Order[$i]['OrderGroup']['id'] = $order['OrderGroup']['id'];
                    $Order[$i]['Item']['nane'] = $order['Item']['name'];
                    $Order[$id]['Item']['ml'] = $order['Item']['ml'];
                    $Order[$i]['Customer']['id'] = $order['Customer']['id'];
                    $Order[$i]['username']['usernane'] = $order['Customer']['username'];
                    $Order[$i]['Bar']['id'] = $order['Bar']['id'];
                    $Order[$i]['Barman']['id'] = $order['Barman']['id'];
                    $Order[$i]['Waiter']['id'] = $order['Waiter']['id']; */
                }
                //debug($order); debug($quantity);
                break;
            case 'user_id':
                $user = $this->User->find('first', array('conditions'=>array('User.username'=>$id)));
                $orders = $this->OrderGroup->Order->find('all', array('conditions' => array('customer_id' => $user['User']['id'])));
                //debug($orders);
                $order = array();
                foreach ($orders as $key => $value) {

                    //debug($value);
                    if (!empty($quantity[$value['Item']['id']]['Quantity'])) {
                        $quantity[$value['Item']['id']]['Quantity']++;
                    } else { //debug($value['Item']['id']);
                        $quantity[$value['Item']['id']]['Quantity'] = 1;
                        $order[$value['Item']['id']] = $value;
                    }
                }
                //debug($order); debug($quantity);
                break;
        }
        $this->set(compact('order','quantity'));
        $this->OrderGroup->recursive = 0;
        $this->set('orderGroups', $this->OrderGroup->find('all', array('conditions' => array('user_id' => $id))));
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
        if (!$this->OrderGroup->exists($id)) {
            throw new NotFoundException(__('Invalid order group'));
        }
        $options = array('conditions' => array('OrderGroup.' . $this->OrderGroup->primaryKey => $id));
        $this->set('orderGroup', $this->OrderGroup->find('first', $options));

    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->OrderGroup->create();
            if ($this->OrderGroup->save($this->request->data)) {
                $this->Session->setFlash(__('The order group has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order group could not be saved. Please, try again.'));
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
    public function edit($id = null)
    {
        if (!$this->OrderGroup->exists($id)) {
            throw new NotFoundException(__('Invalid order group'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->OrderGroup->save($this->request->data)) {
                $this->Session->setFlash(__('The order group has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order group could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('OrderGroup.' . $this->OrderGroup->primaryKey => $id));
            $this->request->data = $this->OrderGroup->find('first', $options);
        }
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
        $this->OrderGroup->id = $id;
        if (!$this->OrderGroup->exists()) {
            throw new NotFoundException(__('Invalid order group'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->OrderGroup->delete()) {
            $this->Session->setFlash(__('The order group has been deleted.'));
        } else {
            $this->Session->setFlash(__('The order group could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
