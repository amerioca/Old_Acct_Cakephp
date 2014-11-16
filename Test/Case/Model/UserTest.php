<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.user_group',
		'app.discount',
		'app.discounts_user',
		'app.discount_request',
		'app.admin_credit',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
