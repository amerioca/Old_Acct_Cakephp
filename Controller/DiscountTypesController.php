<?php
App::uses('AppController', 'Controller');
/**
 * DiscountTypes Controller
 *
 * @property DiscountType $DiscountType
 * @property PaginatorComponent $Paginator
 */
class DiscountTypesController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('DiscountType', 'User');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->DiscountType->recursive = 0;
        $this->set('discountTypes', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function lists($id = null, $search = null)
    {
        if (($id == 'loggedin' || $id == 'users') && isset($search)) {
            $discounts = $this->DiscountType->find('first', array('conditions' => array('DiscountType.id' => $search)));
            //debug($discounts);
            $i = 0;
            foreach ($discounts['Discount'] as $discount) {
                if($id=='loggedin'){
                    $conditions = array('discount_id' => $discount['id'], 'location_id'=>1);
                } else {
                        $conditions = array('discount_id' => $discount['id']);
                }
                //debug($discount);
                if ($discount['id'] != 1) {
                    $this->DiscountType->Discount->User->unBindModel(array('hasMany' => array('Entrance', 'Credit', 'LoginToken')));
                    if ($discounted = $this->DiscountType->Discount->User->find('all', array('conditions' =>  $conditions))) {
                        //debug($discounted);
                        foreach ($discounted as $users) {
                            $user[$i]['User']['id'] = $users['User']['id'];
                            $user[$i]['User']['name']=$users['User']['first_name'].' '.$users['User']['last_name'];
                            $user[$i]['User']['username']=$users['User']['username'];
                            $user[$i]['UserGroup']['name']=$users['UserGroup']['name'];
                            $user[$i]['Discount']['name']=$users['Discount']['name'];
                            $i++;
                        }
                    }
                }
            }
            $this->set('Users', $user); //debug($user);
            //$this->redirect('lists');
        }
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->DiscountType->create();
            if ($this->DiscountType->save($this->request->data)) {
                $this->Session->setFlash(__('The discount type has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The discount type could not be saved. Please, try again.'));
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
        if (!$this->DiscountType->exists($id)) {
            throw new NotFoundException(__('Invalid discount type'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->DiscountType->save($this->request->data)) {
                $this->Session->setFlash(__('The discount type has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The discount type could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('DiscountType.' . $this->DiscountType->primaryKey => $id));
            $this->request->data = $this->DiscountType->find('first', $options);
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
        $this->DiscountType->id = $id;
        if (!$this->DiscountType->exists()) {
            throw new NotFoundException(__('Invalid discount type'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->DiscountType->delete()) {
            $this->Session->setFlash(__('The discount type has been deleted.'));
        } else {
            $this->Session->setFlash(__('The discount type could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
