<?php
App::uses('OrderType', 'Model');

/**
 * OrderType Test Case
 *
 */
class OrderTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order_type',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.item',
		'app.category',
		'app.inventory',
		'app.price',
		'app.specialtydrink',
		'app.items_specialtydrink',
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
		$this->OrderType = ClassRegistry::init('OrderType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderType);

		parent::tearDown();
	}

}
