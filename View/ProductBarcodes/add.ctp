<div class="productBarcodes form">
<?php echo $this->Form->create('ProductBarcode'); ?>
	<fieldset>
		<legend><?php echo __('Add Product Barcode'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('barcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?> <?php echo $this->Html->link(__('New Product'), array('controller'=>'products', 'action'=>'add'));?>
</div>
<?php echo $this->element('sidebar'); ?>
