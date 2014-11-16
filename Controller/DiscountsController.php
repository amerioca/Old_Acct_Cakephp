<?php
App::uses('AppController', 'Controller');
/**
 * Discounts Controller
 *
 * @property Discount $Discount
 * @property PaginatorComponent $Paginator
 */
class DiscountsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Discount', 'Entrance');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Discount->recursive = 0;
        $this->set('discounts', $this->Paginator->paginate());
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
        if (!$this->Discount->exists($id)) {
            throw new NotFoundException(__('Invalid discount'));
        }
        $options = array('conditions' => array('Discount.' . $this->Discount->primaryKey => $id));
        $this->set('discount', $this->Discount->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Discount->create();
            if ($this->Discount->save($this->request->data)) {
                $this->Session->setFlash(__('The discount has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The discount could not be saved. Please, try again.'));
            }
        }
        $discountTypes = $this->Discount->DiscountType->find('list');
        $users = $this->Discount->User->find('list');
        $this->set(compact('discountTypes', 'users'));
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
        if (!$this->Discount->exists($id)) {
            throw new NotFoundException(__('Invalid discount'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Discount->save($this->request->data)) {
                $this->Session->setFlash(__('The discount has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The discount could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Discount.' . $this->Discount->primaryKey => $id));
            $this->request->data = $this->Discount->find('first', $options);
        }
        $discountTypes = $this->Discount->DiscountType->find('list');
        $users = $this->Discount->User->find('list');
        $this->set(compact('discountTypes', 'users'));
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
        $this->Discount->id = $id;
        if (!$this->Discount->exists()) {
            throw new NotFoundException(__('Invalid discount'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Discount->delete()) {
            $this->Session->setFlash(__('The discount has been deleted.'));
        } else {
            $this->Session->setFlash(__('The discount could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function cron()
    {
        $this->Discount->recursive = 3;
        $discounts = $this->Discount->DiscountType->find('all', array('conditions' => array('id' => 2)));
        $this->set('discounts', $discounts);
        foreach ($discounts as $discount) {
            foreach ($discount['Discount'] as $discs) {
                $disc[$discs['id']] = array('interval' => $discs['interval'], 'amount' => $discs['amount']);
            }
        }
        debug($disc);
        $this->Entrance->recursive = -1;
        $entered = $this->Entrance->find('all', array('conditions' => array('location_id' => 1)), array('fields', 'id'));
        debug($entered);
        $entered_users = $this->Entrance->find('all', array('conditions' => array(
            'location_id' => 1,
            //'Entrance.created >' =>'BETWEEN NOW() AND NOW()- INTERVAL 24 HOURS'
        ),
            //array('order'=>'Entrance.id DESC'),
            'limit' => 3));
        debug($entered_users);
        foreach ($disc as $value => $key) {

        }
    }
}

?>