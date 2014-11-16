<?php
/**
 * CreditFixture
 *
 */
class CreditFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'credit_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'marketer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'admin_credit_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'amount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_idx' => array('column' => 'user_id', 'unique' => 0),
			'id_idx2' => array('column' => 'admin_credit_id', 'unique' => 0),
			'id_idx1' => array('column' => 'marketer_id', 'unique' => 0)
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
			'user_id' => 1,
			'credit_type_id' => 1,
			'marketer_id' => 1,
			'admin_credit_id' => 1,
			'amount' => 1,
			'created' => '2014-09-15 06:06:45',
			'modified' => '2014-09-15 06:06:45'
		),
	);

}
