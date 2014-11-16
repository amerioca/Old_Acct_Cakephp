<div class="discountTypes form">
<?php echo $this->Form->create('DiscountType'); ?>
	<fieldset>
		<legend><?php echo __('Add Discount Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
