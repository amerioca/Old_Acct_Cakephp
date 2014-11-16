<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property Category $Category
 * @property Order $Order
 * @property Price $Price
 * @property Inventory $Inventory
 */
class Item extends AppModel {

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
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
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
			'foreignKey' => 'item_id',
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
		'Price' => array(
			'className' => 'Price',
			'foreignKey' => 'item_id',
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
		'Inventory' => array(
			'className' => 'Inventory',
			'joinTable' => 'items_inventories',
			'foreignKey' => 'item_id',
			'associationForeignKey' => 'inventory_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
