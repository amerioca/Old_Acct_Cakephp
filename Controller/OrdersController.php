<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Sms');
    public $uses = array('Order', 'User', 'OrderGroup', 'Category', 'Credit', 'Item', 'Bar');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Order->recursive = 0;
        $this->set('orders', $this->Paginator->paginate());
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
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
        $this->set('order', $this->Order->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Order->create();
            if ($this->Order->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        }
        $orderGroups = $this->Order->OrderGroup->find('list');
        $customers = $this->Order->Customer->find('list');
        $items = $this->Order->Item->find('list');
        $orderTypes = $this->Order->OrderType->find('list');
        $barmen = $this->Order->Barman->find('list');
        $bars = $this->Order->Bar->find('list');
        $waiters = $this->Order->Waiter->find('list');
        //var_dump($this->UserAuth); //UserAuth
        $this->set(compact('orderGroups', 'customers', 'items', 'orderTypes', 'barmen', 'bars', 'waiters'));
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
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Order->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
            $this->request->data = $this->Order->find('first', $options);
        }
        $orderGroups = $this->Order->OrderGroup->find('list');
        $customers = $this->Order->Customer->find('list');
        $items = $this->Order->Item->find('list');
        $orderTypes = $this->Order->OrderType->find('list');
        $barmen = $this->Order->Barman->find('list');
        $bars = $this->Order->Bar->find('list');
        $waiters = $this->Order->Waiter->find('list');
        $this->set(compact('orderGroups', 'customers', 'items', 'orderTypes', 'barmen', 'bars', 'waiters'));
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
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Order->delete()) {
            $this->Session->setFlash(__('The order has been deleted.'));
        } else {
            $this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function kiosk()
    {
        $this->layout = 'ajax';
    }

    public function start($add_item = null, $quantity = null)
    {
        if ($this->request->is('post')) { //debug($this->data); /* Check to assign user */
            if (isset($this->data['Done'])) { /* Look to see if the User hit done */
                $this->redirect(array('action' => 'start'));
            } /* Recover PIN Section */
            if (isset($this->data['forgotPin'])) {
                if ($pin = $this->User->find('first', array('conditions' => array('username' => $this->data['User']['username'])))) {
                    //$this->Sms->send($this->data['User']['username'], __('Your PIN is: ' . $pin['User']['pin']));
                    $this->Session->setFlash(__('PIN sent to your Cell Phone.'));
                    $this->redirect(array('action' => 'start'));
                } else {
                    $this->Session->setFlash(__('Phone Number does not exist, please input your phone number above.'));
                    $this->redirect(array('action' => 'start'));
                }

            } /* Barcode Checking */
            $this->User->recursive = -1;
            if (isset($this->request->data['barcode'])) {
                $data_to_decode = hexdec($this->data['barcode']);
                $data_to_decode = $data_to_decode - 21461034;
                $data_to_decode = strrev($data_to_decode);
                if ($user = $this->User->find('first', array(
                    'conditions' => array(
                        'User.barcode' => $this->data['barcode']),
                    'order' => array('User.id DESC')))
                ) { //debug($user);
                    if ($user['User']['location_id'] == 0) {
                        $this->Session->setFlash(__('User Needs to Check in1'));
                        $this->redirect(array('action' => 'start'));
                    }
                    //debug($user);
                    $this->Session->write('order', array());
                    $this->set('User', $user);
                    $this->Session->write('ouser', $user); /* Assign User */
                } else /* check encrypted barcode from Username table */
                    if ($user = $this->User->find('first', array(
                        'conditions' => array(
                            'User.username' => $data_to_decode),
                        'order' => array('User.id DESC')))
                    ) { //debug($user);
                        if ($user['User']['location_id'] == 0) {
                            $this->Session->setFlash(__('User Needs to Check in2'));
                            $this->redirect(array('action' => 'start'));
                        }
                        $this->Session->write('order', array());
                        $this->set('User', $user);
                        $this->Session->write('ouser', $user); /* Assign User */
                    } else { /* No User Exists */
                        $this->Session->setFlash(__('Username and or PIN incorrectx'));
                        $this->render('start');
                    }
            } /* Check User and PIN */
            elseif ($user = $this->User->find('first', array('conditions' => array('User.username' => $this->data['User']['username'], 'User.pin' => $this->data['User']['pin'])))) {
                $this->Session->write('order', array());
                $this->set('User', $user);
                $this->Session->write('ouser', $user); /* Assign User */
            } else { /* No User Exists */
                $this->Session->setFlash(__('Username and or PIN incorrect'));
                $this->render('start');
            }
        }
        /* Check User Assigned, Select Item to purchase */

        if ($this->Session->read('ouser.User.id')) {
            //debug($quantity);
            if ($quantity == null && $add_item == null) /* Insert the Product into the Session and Show what to Order Next */ {
                if ($credits = $this->Order->query('SELECT user_id, SUM(amount) as credits FROM credits WHERE user_id=' . $this->Session->read('ouser.User.id') . ' group by user_id;')) {
                    $credits = $credits[0][0]['credits'];
                } else $credits = 0;
                $this->set('credits', $credits);
                //debug($credits);
                $this->Category->recursive = 2;
                $this->Bar->recursive = -1;
                $this->set('Bars', $this->Bar->find('all'));
                $this->set('Categories', $this->Category->find('all'));
                $this->render('order');
            } elseif ($add_item != null && $quantity != null) /* Put the Item and Quantity in Session */ {
                $order = $this->Session->read('order');
                $Item = $this->Item->find('first', array('conditions' => array('Item.id' => $add_item)));
                //$this->log($Item, 'debug');
//                debug($order); //die;
                if ($quantity != 0) {
                    $order[$add_item]['name'] = $Item['Item']['name'] . ' - ' . $Item['Item']['ml'] . ' ml';
                    $order[$add_item]['price'] = $Item['Price'][0]['price'];
                    $order[$add_item]['quantity'] = $quantity;
                    $order[$add_item]['total'] = $quantity * $Item['Price'][0]['price'];
                    //$this->log($order, 'debug');
                    $this->Session->write('order', $order);
                } else $this->Session->delete('order.' . $add_item);
                $this->redirect(array('action' => 'start', 'controller' => 'orders', null));
            } elseif ($add_item != null) { /* Send to Quantity Page if not Set in order.ctp */
                $this->set('item', $add_item);
                $this->render('quantity');
            }
        }
    }

    public function submit($location = null, $location_id = null)
    {
        if ($location == 'cancel') {
            $this->Session->delete('ouser');
            $this->Session->delete('order');
            //$this->layout = 'ajax';
            $this->Session->setFlash(__('Last Request Canceled, Place New Order'));
            $this->redirect(array('action' => 'start'));
        }
        $user = $this->Session->read('ouser.User');
        $this->set('Name', $user);
        $group['user_id'] = $user['id'];
        $group['username'] = $user['username'];
        $this->OrderGroup->create();
        $this->OrderGroup->save($group);

        $orders = $this->Session->read('order');
        $total = 0;
        foreach ($orders as $key => $value) {
            $total = $total - $value['total'];
            for ($i = 1; $i <= $value['quantity']; $i++) {
                $Order['Order']['order_group_id'] = $this->OrderGroup->id;
                $Order['Order']['item_id'] = $key;
                $Order['Order']['customer_id'] = $user['id'];
                switch ($location) {
                    case "bar":
                        $Order['Order']['bar_id'] = $location_id;
                        break;
                    case "waiter":
                        $Order['Order']['waiter_id'] = $location_id;
                        break;
                }
                $this->Order->Create();
                $this->Order->Save($Order);
            }
            $Credit['Credit']['user_id'] = $user['id'];
            $Credit['Credit']['order_group_id'] = $this->OrderGroup->id;
            $Credit['Credit']['amount'] = $total;
            $Credit['Credit']['admin_credit_id'] = $this->Session->read('UserAuth.User.id');
            $this->log($Credit, 'debug');
        }
        $this->Credit->create();
        $this->Credit->Save($Credit);
        $this->set('order_id', $this->OrderGroup->id);
        $this->Session->delete('ouser');
        $this->Session->delete('order');
        //$this->layout = 'ajax';
        //$this->redirect(array('action'=>'start'));
    }

}

?>