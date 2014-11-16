<div class="bars form">
<?php echo $this->Form->create('Bar'); ?>
	<fieldset>
		<legend><?php echo __('Add Bar'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
