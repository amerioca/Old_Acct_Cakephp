<?php
App::uses('DiscountType', 'Model');

/**
 * DiscountType Test Case
 *
 */
class DiscountTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discount_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscountType = ClassRegistry::init('DiscountType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscountType);

		parent::tearDown();
	}

}
