<?php
App::uses('Credit', 'Model');

/**
 * Credit Test Case
 *
 */
class CreditTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.credit',
		'app.user',
		'app.credit_type',
		'app.marketer',
		'app.admin_credit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Credit = ClassRegistry::init('Credit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Credit);

		parent::tearDown();
	}

}
