<div id="sidebar-wrapper">


<div class="panel-group" id="accordion">

<div class="nav-logo">
    <a href="/home">
        <img width="100px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/69ac15b67e48eaa9b5264dd56a20c5b4-bevagerlogo_small.png"/>
    </a>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <a href="/home">
                <span class="fa fa-home" style="margin-left: 1px"></span> Home
            </a>
        </h4>
    </div>
</div>

<div class="panel panel-default" id="__tour_ordersMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-list"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#ordersSubmenu">Orders</a>
        </h4>
    </div>
    <div id="ordersSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li id="__tour_orderItems">
                    <a href="/items/order">
                        <span class="fa fa-angle-double-right"></span> Order Form
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/orders/open">
                        <span class="fa fa-angle-double-right"></span> Open Orders
                    </a>
                </li>
                <li>
                    <a href="/orders/placed">
                        <span class="fa fa-angle-double-right"></span> Placed Orders
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/orders/show/ready">
                        <span class="fa fa-angle-double-right"></span> Receive Inventory
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/order/hist/filtered/-/-/empty/1">
                        <span class="fa fa-angle-double-right"></span> Order History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default" id="__tour_inventoryMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-tags"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#inventorySubmenu" style="margin-left: -1px;">Inventory</a>
        </h4>
    </div>
    <div id="inventorySubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/inventory">
                        <span class="fa fa-angle-double-right"></span> Inventory
                    </a>
                </li>
                <li>
                    <a href="/inventory/history">
                        <span class="fa fa-angle-double-right"></span> Inventory History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/breaksheet/open">
                        <span class="fa fa-angle-double-right"></span> Break Sheet
                    </a>
                </li>
                <li>
                    <a href="/breaksheet/hist">
                        <span class="fa fa-angle-double-right"></span> Break Sheet History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/audit/open">
                        <span class="fa fa-angle-double-right"></span> Audit
                    </a>
                </li>
                <li>
                    <a href="/audit/show">
                        <span class="fa fa-angle-double-right"></span> Audit History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/items">
                        <span class="fa fa-angle-double-right"></span> Items
                    </a>
                </li>
                <li id="__tour_newItem">
                    <a href="/item/new">
                        <span class="fa fa-angle-double-right"></span> New Item
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php // TUDO: dgraetz fix so current and in are set when page is clicked. ?>
<div class="panel panel-default">
    <div class="panel-heading current">
        <h4 class="panel-title">
            <span class="fa fa-money"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#billsSubmenu" style="margin-left: -1px;">Bills</a>
        </h4>
    </div>
    <div id="billsSubmenu" class="panel-collapse collapse in">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/bills/">
                        <span class="fa fa-angle-double-right"></span> Unpaid Bills
                    </a>
                </li>
                <li>
                    <a href="/bills/hist">
                        <span class="fa fa-angle-double-right"></span> Bills History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-dollar" style="margin-left: 3px; margin-right: 3px;"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#pricingSubmenu">Pricing</a>
        </h4>
    </div>
    <div id="pricingSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/item/pricing">
                        <span class="fa fa-angle-double-right"></span> Item Pricing
                    </a>
                </li>
                <li>
                    <a href="/cocktail/show">
                        <span class="fa fa-angle-double-right"></span> Cocktail Pricing
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/pricecalculator">
                        <span class="fa fa-angle-double-right"></span> Cocktail Calculator
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default" id="__tour_distributorMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-truck"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#distributorsSubmenu">Vendors</a>
        </h4>
    </div>
    <div id="distributorsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/vendor/show">
                        <span class="fa fa-angle-double-right"></span> Vendor List
                    </a>
                </li>
                <li id="__tour_newDistributor">
                    <a href="/vendor/new">
                        <span class="fa fa-angle-double-right"></span> New Vendor
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-glass"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#tastingsSubmenu">Tastings</a>
        </h4>
    </div>
    <div id="tastingsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/tastings/show">
                        <span class="fa fa-angle-double-right"></span> Tastings
                    </a>
                </li>
                <li>
                    <a href="/tastings/new">
                        <span class="fa fa-angle-double-right"></span> New Tasting Request
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <a href="/catalog">
                <span class="fa fa-book" style="margin-left: 1px"></span> Catalogs
            </a>
        </h4>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-bar-chart-o"></span> <a href="javascript:void(0)" style="margin-left: -2px;" data-toggle="collapse" data-parent="#accordion" data-target="#reportsSubmenu">Reports</a>
        </h4>
    </div>
    <div id="reportsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/reports/purchase/init">
                        <span class="fa fa-angle-double-right"></span> Purchases Report
                    </a>
                </li>
                <li>
                    <a href="/reports/inv/init">
                        <span class="fa fa-angle-double-right"></span> Inventory Report
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/reports/costs/init">
                        <span class="fa fa-angle-double-right"></span> Costs Report
                    </a>
                </li>
                <li>
                    <a href="/reports/costsummary/init">
                        <span class="fa fa-angle-double-right"></span> Cost Summary
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title ">
            <a href="/announcements">
                <span class="fa fa-flag" style="margin-left: 1px"></span> New Features
            </a>
        </h4>
    </div>
</div>
</div>
<div class="help-rail">
    <p class="contact-method"><span class="fa fa-envelope"></span> &nbsp;<a href="mailto:info@bevager.com">info@bevager.com</a><br />
        <span class="fa fa-phone"></span> &nbsp;(650) 503-6455</p>

    <p>&copy; 2014, Bevager Inc. v1.0</p>
</div>

</div>

<?php /*<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Order Types'), array('controller' => 'order_types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Order Type'), array('controller' => 'order_types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Order Groups'), array('controller' => 'order_groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Order Group'), array('controller' => 'order_groups', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Inventory'), array('controller' => 'inventories', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Add Inventory via Barcode'), array('controller' => 'inventories', 'action' => 'checkin')); ?> </li>
        <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('New Product Barcode'), array('controller' => 'product_barcodes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Product Barcodes'), array('controller' => 'product_barcodes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Discount Types'), array('controller' => 'discount_types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Discount Type'), array('controller' => 'discount_types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Prices'), array('controller' => 'prices', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Price'), array('controller' => 'prices', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Credit'), array('controller' => 'credits', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Credit Types'), array('controller' => 'credit_types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Credit Type'), array('controller' => 'credit_types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Admin Credits'), array('controller' => 'admin_credits', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Admin Credit'), array('controller' => 'admin_credits', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Bars'), array('controller' => 'bars', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Bar'), array('controller' => 'bars', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
    </ul>
</div> */ ?>