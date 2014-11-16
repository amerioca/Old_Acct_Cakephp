<div class="actions">
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
</div>