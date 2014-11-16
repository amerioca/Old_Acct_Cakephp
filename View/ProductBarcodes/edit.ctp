<div class="productBarcodes form">
<?php echo $this->Form->create('ProductBarcode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Barcode'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('barcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
