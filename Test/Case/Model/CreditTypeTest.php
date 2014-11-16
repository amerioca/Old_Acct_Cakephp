<?php
App::uses('CreditType', 'Model');

/**
 * CreditType Test Case
 *
 */
class CreditTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.credit_type',
		'app.credit',
		'app.user',
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
		$this->CreditType = ClassRegistry::init('CreditType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CreditType);

		parent::tearDown();
	}

}
