<?php
App::uses('Marketer', 'Model');

/**
 * Marketer Test Case
 *
 */
class MarketerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.marketer',
		'app.user',
		'app.credit',
		'app.credit_type',
		'app.admin_credit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Marketer = ClassRegistry::init('Marketer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Marketer);

		parent::tearDown();
	}

}
