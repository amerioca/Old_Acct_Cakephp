<?php
App::uses('Barman', 'Model');

/**
 * Barman Test Case
 *
 */
class BarmanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.barman',
		'app.user',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.item',
		'app.category',
		'app.inventory',
		'app.price',
		'app.specialtydrink',
		'app.items_specialtydrink',
		'app.order_type',
		'app.bar',
		'app.waiter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Barman = ClassRegistry::init('Barman');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Barman);

		parent::tearDown();
	}

}
