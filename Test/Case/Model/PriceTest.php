<?php
App::uses('Price', 'Model');

/**
 * Price Test Case
 *
 */
class PriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.price',
		'app.item',
		'app.category',
		'app.inventory',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.specialtydrink',
		'app.order_type',
		'app.barman',
		'app.user',
		'app.bar',
		'app.waiter',
		'app.items_specialtydrink'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Price = ClassRegistry::init('Price');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Price);

		parent::tearDown();
	}

}
