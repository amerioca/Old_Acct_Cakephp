<?php
App::uses('AppController', 'Controller');
/**
 * Entrances Controller
 *
 * @property Entrance $Entrance
 * @property PaginatorComponent $Paginator
 */
class EntrancesController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Entrance', 'User', 'Discount', 'Credit');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Entrance->recursive = 0;
        $this->set('entrances', $this->Paginator->paginate());
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
        if (!$this->Entrance->exists($id)) {
            throw new NotFoundException(__('Invalid entrance'));
        }
        $options = array('conditions' => array('Entrance.' . $this->Entrance->primaryKey => $id));
        $this->set('entrance', $this->Entrance->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Entrance->create();
            if ($this->Entrance->save($this->request->data)) {
                $this->Session->setFlash(__('The entrance has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The entrance could not be saved. Please, try again.'));
            }
        }
        $users = $this->Entrance->User->find('list');
        $this->set(compact('users'));
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
        if (!$this->Entrance->exists($id)) {
            throw new NotFoundException(__('Invalid entrance'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Entrance->save($this->request->data)) {
                $this->Session->setFlash(__('The entrance has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The entrance could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Entrance.' . $this->Entrance->primaryKey => $id));
            $this->request->data = $this->Entrance->find('first', $options);
        }
        $users = $this->Entrance->User->find('list');
        $this->set(compact('users'));
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
        $this->Entrance->id = $id;
        if (!$this->Entrance->exists()) {
            throw new NotFoundException(__('Invalid entrance'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Entrance->delete()) {
            $this->Session->setFlash(__('The entrance has been deleted.'));
        } else {
            $this->Session->setFlash(__('The entrance could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function cron()
    { // 'Entrance.created >' =>'BETWEEN NOW() AND NOW()- INTERVAL 24 HOURS'
        $this->Entrance->User->recursive = 0;
        $this->Entrance->User->bindModel(array('belongsTo' => array('Discount' => array('className' => 'Discount'))));
        $discounts = $this->Entrance->User->find('all', array(
            'conditions' => array('location_id' => 1,
                'discount_id' != 1)));
        //debug($discounts);
        foreach ($discounts as $discount) {
            $this->Entrance->recursive = -1;
            $entrance = $this->Entrance->find('first', array(
                'conditions' => array(
                    'Entrance.user_id' => $discount['User']['id'],
                    'location_id' => '1'),
                'order' => array('Entrance.id DESC')));
            //debug($discount);
            if ($discount['Discount']['discount_type_id'] == 2 && $entrance['Entrance']['timer'] == 0) {
                $entrance['Entrance']['timer'] = $discount['Discount']['interval'] + 1;
                //debug($entrance);
                $this->Entrance->Save($entrance);
                $credit['Credit']['amount'] = $discount['Discount']['amount'];
                $credit['Credit']['user_id'] = $discount['User']['id'];
                $credit['Credit']['credit_type_id'] = 2;
                //debug($credit);
                $this->Credit->create();
                $this->Credit->Save($credit);
            }
        }
        $this->Entrance->query('UPDATE entrances SET timer = (timer -1) WHERE location_id = 1 AND timer>0;');
        $this->Entrance->query('UPDATE entrances SET entrancetimer = (entrancetimer-1) WHERE location_id = 0 AND entrancetimer>0;');
        /*
            SELECT *
            FROM table_name
            WHERE table_name.the_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
        */
    }

    public function entered($location_id = null)
    {
        $entrances = $this->Entrance->query('select * from (select * from users WHERE location_id = '.$location_id.' ORDER BY id DESC) AS Entrance GROUP BY id');

        foreach ($entrances as $key => $entrance) {
            $this->Entrance->User->unBindModel(array('hasMany' => array('Credit')));
            $this->Entrance->User->unBindModel(array('hasMany' => array('Entrance')));
            $this->Entrance->User->unBindModel(array('hasMany' => array('LoginToken')));
            $User[] = $this->Entrance->User->find('first', array('conditions' => array('User.id' => $entrance['Entrance']['id'])));
            $credits[] = $this->Entrance->query(
                'SELECT user_id, SUM(amount) as credits FROM credits WHERE user_id=' . $entrance['Entrance']['id'] . ' group by user_id;');
        }
        $this->set('credits', $credits);
        $this->set('User', $User);
        //debug($entrances);
        $this->set('entrances', $entrances);
    }

    public function enteredxx($id = null)
    {
        $this->Paginator->settings = array(
            'location_id' => array(
                'conditions'=>array('User.location_id'=>$id),
                'limit' => 20,
                'order' => array('id' => 'desc'),
                //'group' => array('week', 'home_team_id', 'away_team_id')
            )
        );
        $this->Entrance->recursive = 0;
        $this->set('entrances', $this->Paginator->paginate());
    }
}

?>
