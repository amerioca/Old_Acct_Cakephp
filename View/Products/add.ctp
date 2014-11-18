<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ml');
		echo $this->Form->input('labelnumber');
		echo $this->Form->input('barcode', array('value' => $barcode));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
