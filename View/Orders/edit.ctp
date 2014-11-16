<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('order_group_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('order_type_id');
		echo $this->Form->input('barman_id');
		echo $this->Form->input('bar_id');
		echo $this->Form->input('waiter_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Order.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>