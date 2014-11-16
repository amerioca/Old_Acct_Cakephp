<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 * @property OrderGroup $OrderGroup
 * @property Customer $Customer
 * @property Item $Item
 * @property OrderType $OrderType
 * @property Barman $Barman
 * @property Bar $Bar
 * @property Waiter $Waiter
 */
class Order extends AppModel {

    public $actsAs = array(
        'AuditLog.Auditable' => array(// 'ignore' => array('active', 'name', 'updated')
            //,'habtm'  => array( 'Type', 'Project' )
        )
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
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrderType' => array(
			'className' => 'OrderType',
			'foreignKey' => 'order_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Barman' => array(
			'className' => 'Barman',
			'foreignKey' => 'barman_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bar' => array(
			'className' => 'Bar',
			'foreignKey' => 'bar_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Waiter' => array(
			'className' => 'Waiter',
			'foreignKey' => 'waiter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
