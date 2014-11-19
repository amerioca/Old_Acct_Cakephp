<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('User', 'Entrance', 'Discount');

    /**
     * index method
     *
     * @return void
     */
    public function lists($id = 1)
    {
        $this->Paginator->settings = array(
            'User' => array(
                'conditions' => array('User.location_id' => $id),
                'limit' => 20,
                'order' => array('username' => 'asc'),
                //'group' => array('week', 'home_team_id', 'away_team_id')
            )
        );
        $this->User->recursive = 0;
        $this->set('customers', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function viewCustomer($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $customer = $this->User->find('first', $options);
        $credit = $credits = $this->User->query('SELECT user_id, SUM(amount) as credits FROM credits WHERE credit_type_id<>6 AND user_id=' . $customer['User']['id'] . ' group by user_id;');
        $entrance_owed = $this->User->Credit->query('SELECT user_id, SUM(amount) as credits FROM credits WHERE credit_type_id=6 AND user_id='.$customer['User']['id'] . ' group by user_id');
        $this->set(compact('customer', 'credit', 'entrance_owed'));

    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $userGroups = $this->User->UserGroup->find('list');
        $discounts = $this->User->Discount->find('list');
        $this->set(compact('userGroups', 'discounts'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function editCustomer($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $locations = $this->User->Location->find('list');
        $promoters = $this->User->Promoter->find('list', array('fields' => array('id', 'first_name')));
        $userGroups = $this->User->UserGroup->find('list');
        $discounts = $this->User->Discount->find('list');
        $this->set(compact('userGroups', 'discounts', 'locations', 'promoters'));
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function checkout()
    {
        if ($this->request->is('post')) {
            $username = strrev(hexdec($this->request->data['barcode']) - 21461034);
            //$this->User->recursive = -1;
            $this->User->unbindModel(array('hasMany' => array('LoginToken', 'Credit')));
            $user = $this->User->find('first', array('conditions' => array('User.barcode' => $this->request->data['barcode'])));
            /* Was a barcode user */
            if (!@$user['User']['id']) {
                $this->User->unbindModel(array('hasMany' => array('LoginToken', 'Credit')));
                $user = $this->User->find('first', array('conditions' => array('User.username' => $username)));
            }
            if (!@$user['User']['id']) {
                echo __('User ' . $username . ' Doesn\'t Exist');
            } else {
                //debug($user);
                if (is_array($user['Entrance'])) {
                    $this->Entrance->recursive = -1;
                    $entrance = $this->Entrance->find('first', array(
                        'conditions' => array('Entrance.user_id' => $user['User']['id']),
                        'order' => array('Entrance.id' => 'DESC')
                    ));
                    $code = $username;
                    if (substr($username, 0, 2) == 55) {
                        $code = substr($username, 4);
                    }
                    if (strlen($code) > 10) {
                        $code = substr($username, -4);
                    }
                    debug($code);
                    App::uses('HttpSocket', 'Network/Http');
                    $HttpSocket = new HttpSocket();
                    if (@$entrance['Entrance']['location_id'] == 0) {
                        $newentrance['Entrance']['location_id'] = 1; /*
                        $results = $HttpSocket->get('http://codes:test123@aplogin.com/codes/makecode.cgi',
                            array(
                                'type' => 'n',
                                'code' => $code,
                                'time' => '720',
                                'num' => '1'
                            ));
                        debug($results); */
                    } else {
                        $credits = $this->User->query('SELECT user_id, SUM(amount) as credits FROM credits WHERE user_id=' . $user['User']['id'] . ' group by user_id;');
                        if ($credits[0][0]['credits'] < 0) {
                            $this->Session->setFlash(__('User must pay ') . $credits[0][0]['credits'] . '$R');
                            $this->redirect(array('action' => 'checkout'));
                        } else {
                            $this->Session->setFlash(__('User has been checked out with a Credit of: ') . $credits[0][0]['credits'] . '$R');
                        }
                        $newentrance['Entrance']['location_id'] = 0;
                        $newentrance['Entrance']['entrancetimer'] = 60; /*
                        $HttpSocket = new HttpSocket();
                        $results = $HttpSocket->get('http://codes:test123@aplogin.com/codes/deletecode.cgi',
                            array(
                                'code' => $code
                            ));
                        debug($results); */
                    }
                    $newentrance['Entrance']['user_id'] = $user['User']['id'];
                    debug($newentrance);
                    $this->Entrance->save($newentrance);
                    $this->Entrance->query('UPDATE users SET location_id = "' . $newentrance['Entrance']['location_id'] . '" WHERE id=' . $newentrance['Entrance']['user_id']);
                }
            }

        }
    }


    public
    function addCustomer()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if ($this->request->data['User']['username'] == null) {
                $data['User']['username'] = '5521' . rand(100000000, 599999999);
            }
            if ($this->request->data['User']['pin'] == null) {
                $data['User']['pin'] = rand(1000, 999999);
            }
            $data['User']['location_id'] = 1;
            $this->User->recursive = -1;
            $data_to_decode = hexdec($this->request->data['User']['username']);
            $data_to_decode = $data_to_decode - 21461034;
            $data_to_decode = strrev($data_to_decode);
            //debug($data);
            // FIrst Check to see if we have an encrypted User Card.
            if ($user = $this->User->find('first', array('conditions' => array('User.username' => $data_to_decode)))) { //debug($user);
                $this->Session->setFlash(__('Welcome Back ' . $user['User']['first_name']));
                $this->redirect(array('controller' => 'Customers', 'action' => 'viewCustomer', $user['User']['id']));
            } elseif ( // Second Check by number to see if phone number is in the DB Make sure the number is over the card limit
                $user = $this->User->find('first', array('conditions' => array(
                    'User.username' => $data['User']['username'],
                    'User.active = 1'))) && $data['User']['username'] >= 9999
            ) { debug($user);
                $this->Session->setFlash(__('This User already Exists'));
                $this->redirect(array('controller' => 'Customers', 'action' => 'viewCustomer', $user['User']['id']));
            } // Third Chance, add the user into the DB by Card, or Phone number
            elseif ($user = $this->User->find('first', array('conditions' => array(
                'User.barcode' => $data['User']['barcode'],
                'User.location_id' => 0)))
            ) { debug($user);

            } elseif ($data['User']['username'] < 10000) {
                $data['User']['barcode'] = $data['User']['username'];
                $data['User']['username'] = null;
            }

            //debug($user);
            $this->User->create();
            $this->log('CustomersController:242', 'debug');
            $this->log($data, 'debug');
            if ($this->User->find('first', array('conditions' => array('username' => $data['User']['username'], 'User.location_id' => 0)))) {
                if ($this->User->save($data)) { //debug($this->request->data['Credit']['amount']);
                    if ($this->request->data['Credit']['amount'] > 0) {
                        $credit['Credit']['amount'] = $this->data['Credit']['amount'];
                        $credit['Credit']['user_id'] = $this->User->id;
                        $credit['Credit']['admin_credit_id'] = $this->Session->read('UserAuth.User.id');
                        $credit['Credit']['promoter_id'] = $this->request->data['User']['promoter_id'];
                        //debug($credit);
                        $this->User->Credit->create();
                        $this->User->Credit->save($credit);
                    }
                    $this->Session->setFlash(__('The user may Enter.'));
                    //return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                }
            }
            $this->Session->setFlash(__('User Logged in already'));
        }
        $userGroups = $this->User->UserGroup->find('list');
        $discounts = $this->Discount->find('list');
        $this->set(compact('userGroups', 'discounts'));
        $this->set('promoters', $this->User->Promoter->find('list', array('fields' => array('Promoter.id', 'Promoter.first_name'))));
    }

    function enter($id = null)
    {
        if (isset($id)) {
            $this->User->id = $id;
            $User['User']['location_id'] = 1;
            $this->User->save($User);
            $this->Session->setFlash(__('Customer has been activated'));
            $this->redirect(array('controller' => 'customers', 'action' => 'addCustomer'));
        } else $this->Session->setFlash(__('No Customer Selected'));
    }

    function out($id = null)
    {
        if (isset($id)) {
            $this->User->id = $id;
            $User['User']['location_id'] = 0;
            $this->User->save($User);
            $this->Session->setFlash(__('Customer has been deactivated'));
            $this->redirect(array('controller' => 'customers', 'action' => 'addCustomer'));
        } else $this->Session->setFlash(__('No Customer Selected'));
    }
}
