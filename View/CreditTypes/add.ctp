<div class="creditTypes form">
<?php echo $this->Form->create('CreditType'); ?>
	<fieldset>
		<legend><?php echo __('Add Credit Type'); ?></legend>
	<?php
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>