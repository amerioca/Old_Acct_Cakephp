<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('active');
		echo $this->Form->input('name');
		echo $this->Form->input('ml');
		echo $this->Form->input('Inventory');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
