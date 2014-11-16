<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('active');
		echo $this->Form->input('name');
		echo $this->Form->input('ml');
		echo $this->Form->input('Inventory');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Item.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
