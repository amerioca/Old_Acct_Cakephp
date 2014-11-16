<?php
App::uses('AdminCredit', 'Model');

/**
 * AdminCredit Test Case
 *
 */
class AdminCreditTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.admin_credit',
		'app.user',
		'app.user_group',
		'app.discount',
		'app.discounts_user',
		'app.discount_request',
		'app.barman',
		'app.credit',
		'app.customer',
		'app.entrance',
		'app.event',
		'app.login_token',
		'app.marketer',
		'app.waiter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdminCredit = ClassRegistry::init('AdminCredit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdminCredit);

		parent::tearDown();
	}

}
