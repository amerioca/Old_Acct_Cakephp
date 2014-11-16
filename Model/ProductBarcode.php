<?php
App::uses('AppModel', 'Model');
/**
 * ProductBarcode Model
 *
 * @property Product $Product
 */
class ProductBarcode extends AppModel {

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
		'barcode' => array(
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
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
