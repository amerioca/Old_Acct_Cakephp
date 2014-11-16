<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 */
class User extends AppModel
{

    public $actsAs = array(
        'AuditLog.Auditable' => array( // 'ignore' => array('active', 'name', 'updated')
            //,'habtm'  => array( 'Type', 'Project' )
        )
    );

    //public $validate = array('username' => array('rule'    => 'naturalNumber','message' => 'Please supply a phone number.'));

    /*
     * public $validate = array(
        'username' => array(
            'rule'    => 'isUnique',
            'message' => 'This username has already been taken.'
        )
    );
    public $validate = array(
        'username' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Your Phone number',
                'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'pin' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Your PIN code',
                'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    ); */
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'UserGroup' => array(
            'className' => 'UserGroup',
            'foreignKey' => 'user_group_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Discount' => array(
            'className' => 'Discount',
            'foreignKey' => 'discount_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Promoter' => array(
            'Promoter' => array(
                'className' => 'Promoter',
                'foreignKey' => 'promoter_id'
            )
        ),
        'Location' => array(
            'className' => 'Location',
            'foreignKey' => 'location_id',
            'dependent' => false)
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'AdminCredit' => array(
            'className' => 'AdminCredit',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Credit' => array(
            'className' => 'Credit',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Entrance' => array(
            'className' => 'Entrance',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Event' => array(
            'className' => 'Event',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'LoginToken' => array(
            'className' => 'LoginToken',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'OrderType' => array(
            'className' => 'OrderType',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );


    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Discount' => array(
            'className' => 'Discount',
            'joinTable' => 'discounts_users',
            'foreignKey' => 'user_id',
            'associationForeignKey' => 'discount_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    public $hasOne = array(

        'Map' => array(
            'className' => 'Map',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
