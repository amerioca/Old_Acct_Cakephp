<?php
App::uses('OrderGroup', 'Model');

/**
 * OrderGroup Test Case
 *
 */
class OrderGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order_group',
		'app.order',
		'app.customer',
		'app.item',
		'app.category',
		'app.inventory',
		'app.price',
		'app.specialtydrink',
		'app.items_specialtydrink',
		'app.order_type',
		'app.barman',
		'app.bar',
		'app.waiter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderGroup = ClassRegistry::init('OrderGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderGroup);

		parent::tearDown();
	}

}
