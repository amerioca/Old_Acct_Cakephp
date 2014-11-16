<?php
/**
 * InventoryFixture
 *
 */
class InventoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 45, 'unsigned' => false),
		'cost' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'ml' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 45, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'cost' => 1,
			'ml' => 1,
			'created' => '2014-09-15 07:43:49',
			'modified' => '2014-09-15 07:43:49'
		),
	);

}
