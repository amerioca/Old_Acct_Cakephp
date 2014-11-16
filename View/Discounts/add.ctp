<div class="discounts form">
<?php echo $this->Form->create('Discount'); ?>
	<fieldset>
		<legend><?php echo __('Add Discount'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('discount_type_id');
		echo $this->Form->input('percent');
		echo $this->Form->input('interval');
		echo $this->Form->input('amount');
		//echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
