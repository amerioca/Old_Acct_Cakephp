<?php
App::uses('DiscountsUser', 'Model');

/**
 * DiscountsUser Test Case
 *
 */
class DiscountsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discounts_user',
		'app.discount',
		'app.admin',
		'app.barman',
		'app.customer',
		'app.user_group',
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
		'app.user',
		'app.admin_credit',
		'app.credit',
		'app.credit_type',
		'app.promoter',
		'app.entrance',
		'app.event',
		'app.login_token',
		'app.bar',
		'app.waiter',
		'app.employee',
		'app.manager',
		'app.privlaged',
		'app.superemployee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscountsUser = ClassRegistry::init('DiscountsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscountsUser);

		parent::tearDown();
	}

}
