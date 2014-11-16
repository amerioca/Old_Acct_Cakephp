<?php
App::uses('ProductBarcode', 'Model');

/**
 * ProductBarcode Test Case
 *
 */
class ProductBarcodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_barcode',
		'app.product',
		'app.bottlesize',
		'app.inventory',
		'app.item',
		'app.category',
		'app.order',
		'app.order_group',
		'app.customer',
		'app.user_group',
		'app.discount',
		'app.discount_type',
		'app.admin',
		'app.barman',
		'app.employee',
		'app.discount_request',
		'app.manager',
		'app.privlaged',
		'app.promoter',
		'app.superemployee',
		'app.user',
		'app.discounts_user',
		'app.admin_credit',
		'app.credit',
		'app.credit_type',
		'app.entrance',
		'app.event',
		'app.login_token',
		'app.order_type',
		'app.waiter',
		'app.bar',
		'app.price',
		'app.items_inventory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductBarcode = ClassRegistry::init('ProductBarcode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductBarcode);

		parent::tearDown();
	}

}
