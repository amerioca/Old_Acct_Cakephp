<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ml');
		echo $this->Form->input('labelnumber');
		echo $this->Form->input('barcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Barcodes'), array('controller' => 'product_barcodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Barcode'), array('controller' => 'product_barcodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
