<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
        echo $this->Html->css('/usermgmt/css/umstyle');
        echo $this->Html->css(array('cake.generic',
            '/js/jquery.mobile/demos/css/themes/default/jquery.mobile-1.4.3.min.css',
        '/js/jquery.mobile/demos/_assets/css/jqm-demos.css'
        ));

        // JQuery Mobile js :dg
        echo $this->Html->script(array('jquery.min',
            '/js/jquery.mobile/demos/_assets/js/index.js')); ?>

    <script type="text/javascript">
        $(document).bind("mobileinit", function () {
            $.mobile.ajaxEnabled = false;
        });
    </script>
    <?php
            echo $this->Html->script(array('jquery.mobile-1.4.3.min'));


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<div id="container" data-ajax="false">

			<h1><?php // echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
        <a href="#popupNested" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-bars ui-btn-icon-left ui-btn-b" data-transition="pop">Menu ::<?php echo $this->Session->read('UserAuth.User.username');?>::</a>
        <div data-role="popup" id="popupNested" data-theme="none">
            <div data-role="collapsibleset" data-theme="b" data-content-theme="a" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" style="margin:0; width:250px;">
                <div data-role="collapsible" data-inset="false">
                    <h2><?php echo __('Orders');?></h2>
                    <ul data-role="listview">
                        <li><a href="/orders/start/" data-rel="dialog" data-ajax="false"><?php echo __('New Order');?></a></li>
                        <li><a href="/orders/" data-rel="dialog" data-ajax="false"><?php echo __('Orders');?></a></li>
                        <li><a href="/ordergroups/" data-rel="dialog" data-ajax="false"><?php echo __('Order Groups');?></a></li>
                        <li><a href="/ordertypes/" data-rel="dialog" data-ajax="false"><?php echo __('Order Types');?></a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h2><?php echo __('Customers');?></h2>
                    <ul data-role="listview">
                        <li><a href="/customers/addCustomer/" data-rel="dialog" data-ajax="false"><?php echo __('Add Customer');?></a></li>
                        <li><a href="/entrances/entered/1" data-rel="dialog" data-ajax="false"><?php echo __('Current Customers');?></a></li>
                        <li><a href="/credits/start/" data-rel="dialog" data-ajax="false"><?php echo __('Add Credit');?></a></li>
                        <li><a href="/discount_types/add/" data-rel="dialog" data-ajax="false"><?php echo __('Add Discount Type');?></a></li>
                    </ul>
                </div>
                <div data-role="collapsible" data-inset="false">
                    <h2><?php echo __('Inventory');?></h2>
                    <ul data-role="listview">
                        <li><a href="/inventories/checkin/" data-rel="dialog" data-ajax="false"><?php echo __('Checkin');?></a></li>
                        <li><a href="/inventories/checkout/" data-rel="dialog" data-ajax="false"><?php echo __('Checkout');?></a></li>
                        <li><a href="/inventories/" data-rel="dialog" data-ajax="false"><?php echo __('Inventory');?></a></li>
                        <li><a href="/items/" data-rel="dialog" data-ajax="false"><?php echo __('Items');?></a></li>
                        <li><a href="/items/add/" data-rel="dialog" data-ajax="false"><?php echo __('New Item');?></a></li>
                        <li><a href="/products/" data-rel="dialog" data-ajax="false"><?php echo __('Products');?></a></li>
                        <li><a href="/products/add/" data-rel="dialog" data-ajax="false"><?php echo __('Add Products');?></a></li>
                        <li><a href="/product_barcodes/add/" data-rel="dialog" data-ajax="false"><?php echo __('Add Product Barcode');?></a></li>
                        <li><a href="/product_barcodes/" data-rel="dialog" data-ajax="false"><?php echo __('Product Barcodes');?></a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h2><?php echo __('Discounts');?></h2>
                    <ul data-role="listview">
                        <li><a href="/discounts/" data-rel="dialog" data-ajax="false"><?php echo __('Discount');?></a></li>
                        <li><a href="/discounts/add/" data-rel="dialog" data-ajax="false"><?php echo __('Add Discount');?></a></li>
                        <li><a href="/discount_types/" data-rel="dialog" data-ajax="false"><?php echo __('Discount Types');?></a></li>
                        <li><a href="discount_types/add/" data-rel="dialog" data-ajax="false"><?php echo __('Add Discount Type');?></a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h2><?php echo __('Users');?></h2>
                    <ul data-role="listview">
                        <li><a href="/addUser/" data-rel="dialog" data-ajax="false"><?php echo __('Add User');?></a></li>
                        <li><a href="/allUsers/" data-rel="dialog" data-ajax="false"><?php echo __('Users');?></a></li>
                        <li><a href="/addGroup/" data-rel="dialog" data-ajax="false"><?php echo __('Add Group');?></a></li>
                        <li><a href="/allGroups/" data-rel="dialog" data-ajax="false"><?php echo __('Groups');?></a></li>
                        <li><a href="/permissions/" data-rel="dialog" data-ajax="false"><?php echo __('Permissions');?></a></li>
                        <li><a href="/viewUser/" data-rel="dialog" data-ajax="false"><?php echo __('My Profile');?></a></li>
                        <li><a href="/editUser/<?php echo $this->UserAuth->getUserId(); ?>" data-rel="dialog" data-ajax="false"><?php echo __('Edit Profile');?></a></li>
                        <li><a href="/changePassword/" data-rel="dialog" data-ajax="false"><?php echo __('Change Password');?></a></li>
                    </ul>
                </div><!-- /collapsible -->
            </div><!-- /collapsible set -->
        </div><!-- /popup -->
        <div><?php echo $this->Html->link(__('English'), array('language'=>'eng'));
            echo $this->Html->link(__('Français'), array('language'=>'fre'));  ?>
        </div>


            <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
