<div class="orderGroups form">
<?php echo $this->Form->create('OrderGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Order Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('username');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>