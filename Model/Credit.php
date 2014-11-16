<?php
App::uses('AppModel', 'Model');
/**
 * Credit Model
 *
 * @property OrderGroup $OrderGroup
 * @property User $User
 * @property CreditType $CreditType
 * @property Promoter $Promoter
 * @property AdminCredit $AdminCredit
 */
class Credit extends AppModel {

    public $actsAs = array(
        'AuditLog.Auditable' => array(// 'ignore' => array('active', 'name', 'updated')
            //,'habtm'  => array( 'Type', 'Project' )
        )
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'OrderGroup' => array(
			'className' => 'OrderGroup',
			'foreignKey' => 'order_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CreditType' => array(
			'className' => 'CreditType',
			'foreignKey' => 'credit_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Promoter' => array(
			'className' => 'Promoter',
			'foreignKey' => 'promoter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AdminCredit' => array(
			'className' => 'User',
			'foreignKey' => 'admin_credit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
