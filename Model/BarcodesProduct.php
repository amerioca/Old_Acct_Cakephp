<?php
App::uses('AppModel', 'Model');
/**
 * BarcodesProduct Model
 *
 * @property Barcode $Barcode
 * @property Product $Product
 */
class BarcodesProduct extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'barcode_id' => array(
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
		'Barcode' => array(
			'className' => 'Barcode',
			'foreignKey' => 'barcode_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
