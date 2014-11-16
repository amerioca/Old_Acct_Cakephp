<div class="inventories form">
<?php echo $this->Form->create('Inventory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inventory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('cost');
		echo $this->Form->input('ml');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inventory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Inventory.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
