<div class="orderTypes form">
<?php echo $this->Form->create('OrderType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrderType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OrderType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Order Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>