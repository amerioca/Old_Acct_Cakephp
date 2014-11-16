<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property UserGroup $UserGroup
 * @property Discount $Discount
 * @property DiscountRequest $DiscountRequest
 * @property Order $Order
 */
class Customer extends AppModel {


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
		'DiscountRequest' => array(
			'className' => 'DiscountRequest',
			'foreignKey' => 'discount_request_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'customer_id',
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
        'Location' => array(
            'className' => 'Location',
            'foreignKey' => 'location_id',
            'dependent' => false
        )
	);

}
