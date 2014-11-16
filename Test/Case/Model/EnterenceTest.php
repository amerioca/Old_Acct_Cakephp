<?php
App::uses('Entrance', 'Model');

/**
 * Entrance Test Case
 *
 */
class EntranceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entrance',
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
		'app.items_inventory',
		'app.order_type',
		'app.bar',
		'app.waiter',
		'app.employee',
		'app.manager',
		'app.privlaged',
		'app.promoter',
		'app.superemployee',
		'app.discounts_user',
		'app.admin_credit',
		'app.credit',
		'app.credit_type',
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
		$this->Entrance = ClassRegistry::init('Entrance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entrance);

		parent::tearDown();
	}

}
