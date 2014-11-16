<?php
App::uses('AppModel', 'Model');
/**
 * DiscountType Model
 *
 * @property Discount $Discount
 */
class DiscountType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Discount' => array(
			'className' => 'Discount',
			'foreignKey' => 'discount_type_id',
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

}
