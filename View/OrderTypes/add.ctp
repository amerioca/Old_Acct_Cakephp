<div class="orderTypes form">
<?php echo $this->Form->create('OrderType'); ?>
	<fieldset>
		<legend><?php echo __('Add Order Type'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
