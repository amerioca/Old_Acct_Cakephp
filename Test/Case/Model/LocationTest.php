<?php
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location',
		'app.user',
		'app.user_group',
		'app.discount',
		'app.discount_type',
		'app.admin',
		'app.barman',
		'app.customer',
		'app.discount_request',
		'app.order',
		'app.order_group',
		'app.item',
		'app.category',
		'app.price',
		'app.inventory',
		'app.product',
		'app.label',
		'app.product_barcode',
		'app.items_inventory',
		'app.order_type',
		'app.bar',
		'app.waiter',
		'app.employee',
		'app.manager',
		'app.privileged',
		'app.promoter',
		'app.credit',
		'app.credit_type',
		'app.superemployee',
		'app.discounts_user',
		'app.entrance',
		'app.event',
		'app.login_token'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

}
