<?php
App::uses('ItemsInventory', 'Model');

/**
 * ItemsInventory Test Case
 *
 */
class ItemsInventoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.items_inventory',
		'app.item',
		'app.category',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.user',
		'app.order_type',
		'app.barman',
		'app.bar',
		'app.waiter',
		'app.price',
		'app.inventory',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemsInventory = ClassRegistry::init('ItemsInventory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemsInventory);

		parent::tearDown();
	}

}
