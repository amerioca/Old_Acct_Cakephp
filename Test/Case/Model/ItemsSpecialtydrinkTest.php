<?php
App::uses('ItemsSpecialtydrink', 'Model');

/**
 * ItemsSpecialtydrink Test Case
 *
 */
class ItemsSpecialtydrinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.items_specialtydrink',
		'app.item',
		'app.category',
		'app.inventory',
		'app.order',
		'app.profile',
		'app.recipe',
		'app.price',
		'app.specialtydrink'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemsSpecialtydrink = ClassRegistry::init('ItemsSpecialtydrink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemsSpecialtydrink);

		parent::tearDown();
	}

}
