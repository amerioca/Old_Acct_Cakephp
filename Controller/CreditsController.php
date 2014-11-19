<?php
App::uses('AppController', 'Controller');
/**
 * Credits Controller
 *
 * @property Credit $Credit
 * @property PaginatorComponent $Paginator
 */
class CreditsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Credit', 'User');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Credit->recursive = 0;
        $this->set('credits', $this->Paginator->paginate());
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
        if (!$this->Credit->exists($id)) {
            throw new NotFoundException(__('Invalid credit'));
        }
        $options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
        $this->set('credit', $this->Credit->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null)
    {
        if ($this->request->is('post')) {
            $this->Credit->create(); // debug($this->request->data);
            list($entrance, $credit) = split('[/]', $this->request->data['Cost']['Entrance']);
            // Deduct the price of entrance from money to be received
            if ($entrance <> 0) {
                $data['Credit']['0'] = $this->request->data['Credit'];
                $data['Credit']['0']['amount'] = $entrance;
                $data['Credit']['0']['credit_type_id'] = '6'; // Entrance Fee
            }
            //Add credit the customer will have on his account.
            if ($entrance <> 0) {
                $data['Credit']['1'] = $this->request->data['Credit'];
                $data['Credit']['1']['amount'] = $credit;
                $data['Credit']['1']['credit_type_id'] = '7'; //Entrance Consumption
            }
            // Check to see if credit/entrance was paid ahead of time.
            if (!empty($this->request->data['Credit']['amount'])) {
                $total_credit = $this->request->data['Credit']['amount'];
                if ($total_credit >= $entrance AND $entrance<>0) {
                    $data['Credit']['2'] = $this->request->data['Credit'];
                    $data['Credit']['2']['amount'] = -$entrance;
                    $data['Credit']['2']['credit_type_id'] = '6';
                    $total_credit = $total_credit + $entrance;
                }
                $data['Credit']['3'] = $this->request->data['Credit'];
                $data['Credit']['3']['amount'] = $total_credit;
                $data['Credit']['3']['credit_type_id'] = '5'; // Employee added this credit
            }
            $data['User'] = $this->request->data['User'];
            //debug($data); //die;
            if ($this->User->saveAll($data)) {
                $this->Session->setFlash(__('The credit has been saved.'));
                return $this->redirect(array('controller' => 'Customers', 'action' => 'addCustomer'));
            } else {
                $this->Session->setFlash(__('The credit could not be saved. Please, try again.'));
            }
        }
        $this->User->recursive = -1;
        $customer = $this->User->find('first', array('conditions' => array('User.id' => $id)));
        $orderGroups = $this->Credit->OrderGroup->find('list');
        $users = $this->Credit->User->find('list');
        $creditTypes = $this->Credit->CreditType->find('list', array('fields' => array('CreditType.id', 'CreditType.type')));
        $promoters = $this->Credit->Promoter->find('list', array('fields' => array('Promoter.id', 'Promoter.first_name')));
        $adminCredits = $this->Credit->AdminCredit->find('list');
        $this->set(compact('orderGroups', 'users', 'creditTypes', 'promoters', 'adminCredits', 'customer'));
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
        if (!$this->Credit->exists($id)) {
            throw new NotFoundException(__('Invalid credit'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Credit->save($this->request->data)) {
                $this->Session->setFlash(__('The credit has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The credit could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
            $this->request->data = $this->Credit->find('first', $options);
        }
        $orderGroups = $this->Credit->OrderGroup->find('list');
        $users = $this->Credit->User->find('list');
        $creditTypes = $this->Credit->CreditType->find('list');
        $promoters = $this->Credit->Promoter->find('list');
        $adminCredits = $this->Credit->AdminCredit->find('list');
        $this->set(compact('orderGroups', 'users', 'creditTypes', 'promoters', 'adminCredits'));
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
        $this->Credit->id = $id;
        if (!$this->Credit->exists()) {
            throw new NotFoundException(__('Invalid credit'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Credit->delete()) {
            $this->Session->setFlash(__('The credit has been deleted.'));
        } else {
            $this->Session->setFlash(__('The credit could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function start()
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
            if (isset($this->data['barcode'])) {
                $data_to_decode = hexdec($this->data['barcode']);
                $data_to_decode = $data_to_decode - 21461034;
                $data_to_decode = strrev($data_to_decode);
                if ($user = $this->User->find('first', array(
                    'conditions' => array(
                        'User.barcode' => $this->data['barcode'],
                        'active' => '1'),
                    'order' => array('User.id DESC')))
                ) { //debug($user);
                    $this->Session->write('order', array());
                    $this->set('User', $user);
                    $this->Session->write('cuser', $user); /* Assign User */
                } else
                    if ($this->User->find('first', array(
                        'conditions' => array(
                            'User.username' => $data_to_decode,
                            'active' => '1'),
                        'order' => array('User.id DESC')))
                    ) {
                        $this->Session->write('order', array());
                        $this->set('User', $user);
                        $this->Session->write('cuser', $user); /* Assign User */
                    } else { /* No User Exists */
                        $this->Session->setFlash(__('Username and or PIN incorrect'));
                        $this->render('start');
                    }
            } /* Check User and PIN */
            elseif ($user = $this->User->find('first', array('conditions' => array(
                'User.username' => $this->data['User']['username'],
                'User.pin' => $this->data['User']['pin'])))
            ) {
                $this->Session->write('order', array());
                $this->set('User', $user);
                $this->Session->write('cuser', $user); /* Assign User */
            } else { /* No User Exists */
                $this->Session->setFlash(__('Username and or PIN incorrect'));
                $this->render('start');
            }
        }
        //debug($this->Session->read('cuser'));
        if ($this->Session->read('cuser.User.id')) {
            $this->set('User', $this->Session->read('cuser'));
            // debug($this->request->data);
            $this->render('credit');
        }
    }

    public function submit($location = null)
    {
        if ($location == 'cancel') {
            $this->Session->delete('cuser');
            $this->Session->delete('credit');
            //$this->layout = 'ajax';
            $this->Session->setFlash(__('Last Request Canceled, Add Credit'));
            $this->redirect(array('action' => 'start'));
        }
        //debug($this->request->data);
        if ($this->request->is('post')) {
            $user = $this->Session->read('cuser.User');
            $this->set('Name', $user);
            $credits = $this->Session->read('credit');
            //$this->log($Credit, 'debug');
            $Credit['user_id'] = $this->request->data['Credit']['user_id'];
            $Credit['amount'] = $this->request->data['Credit']['amount'];
            $Credit['admin_credit_id'] = $this->Session->read('UserAuth.User.id');
            //debug($this->Session->read('UserAuth'));
            $Credit['promoter_id'] = $user['promoter_id'];
            $Credit['credit_type_id'] = 1;
            //$this->log($Credit, 'debug');
            $this->Credit->create();
            if ($this->Credit->Save($Credit)) {
                $this->Session->setFlash(__('Credit Amount added: ') . $Credit['amount'] . ' $R');
            } else $this->Session->setFlash(__('Something went wrong, try again'));

            $this->set('credit_id', $this->Credit->id);
            $this->Session->delete('cuser');
            $this->Session->delete('credit');
        }
        //$this->layout = 'ajax';
        $this->redirect(array('action' => 'start'));
    }

    function paypal()
    {
        App::uses('Paypal', 'Paypal.Lib');

        $this->Paypal = new Paypal(array(
            'sandboxMode' => true,
            'nvpUsername' => '	neorio2000_api1.hotmail.com',
            'nvpPassword' => 'LG3XSRSSP2N997ME',
            'nvpSignature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AZhB9l4nRj2mRFJNM1T2XWkWNYPP'
        ));

        $order = array(
            'description' => 'Your purchase with Acme clothes store',
            'currency' => 'GBP',
            'return' => 'https://www.my-amazing-clothes-store.com/review-paypal.php',
            'cancel' => 'https://www.my-amazing-clothes-store.com/checkout.php',
            'custom' => 'bingbong',
            'items' => array(
                0 => array(
                    'name' => 'Blue shoes',
                    'description' => 'A pair of really great blue shoes',
                    'tax' => 2.00,
                    'shipping' => 0.00,
                    'subtotal' => 8.00,
                ),
                1 => array(
                    'name' => 'Red trousers',
                    'description' => 'Tight pair of red pants, look good with a hat.',
                    'tax' => 2.00,
                    'shipping' => 2.00,
                    'subtotal' => 6.00
                ),
            )
        );
        try {
            $this->Paypal->setExpressCheckout($order);
        } catch (Exception $e) {
            // $e->getMessage();
            $this->set('Checkout', $e);
        }

        try {
            $this->Paypal->getExpressCheckoutDetails($token);
        } catch (Exception $e) {
            // $e->getMessage();
            $this->set('Checkout', $e);
        }
    }

    public function lists($id = null)
    {
        $this->Paginator->settings = array(
            'Credit' => array(
                //'conditions'=>array('Credit.user_id'=>$id),
                'limit' => 20,
                'order' => array('id' => 'desc'),
                //'group' => array('week', 'home_team_id', 'away_team_id')
            )
        );

        if (isset($id)) {
            $this->Paginator->settings['Credit']['conditions'] = array('Credit.user_id' => $id);
        }
        $this->Credit->recursive = 0;
        $this->set('credits', $this->Paginator->paginate());
    }

    public function pay($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Credit->save($this->request->data)) {
                $this->Session->setFlash(__('The Bill has been paid.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The credit could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
            $this->request->data = $this->Credit->find('first', $options);
        }
        $this->User->recursive = -1;
        $customer = $this->User->find('first', array('conditions' => array('User.id' => $id)));
        $credits = $this->User->query('SELECT user_id, SUM(amount) as credits FROM credits WHERE user_id=' . $customer['User']['id'] . ' group by user_id;');
        $orderGroups = $this->Credit->OrderGroup->find('list');
        $users = $this->Credit->User->find('list');
        $creditTypes = $this->Credit->CreditType->find('list', array('fields' => array('CreditType.id', 'CreditType.type')));
        $promoters = $this->Credit->Promoter->find('list', array('fields' => array('Promoter.id', 'Promoter.first_name')));
        $adminCredits = $this->Credit->AdminCredit->find('list');
        $this->set(compact('orderGroups', 'users', 'creditTypes', 'promoters', 'adminCredits', 'customer', 'credits'));
    }
}
