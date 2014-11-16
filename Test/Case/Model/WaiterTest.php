<?php
App::uses('Waiter', 'Model');

/**
 * Waiter Test Case
 *
 */
class WaiterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.waiter',
		'app.user',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.item',
		'app.category',
		'app.inventory',
		'app.price',
		'app.specialtydrink',
		'app.items_specialtydrink',
		'app.order_type',
		'app.barman',
		'app.bar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Waiter = ClassRegistry::init('Waiter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Waiter);

		parent::tearDown();
	}

}
