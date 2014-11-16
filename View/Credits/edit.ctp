<div class="credits form">
<?php echo $this->Form->create('Credit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('order_group_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('credit_type_id');
		echo $this->Form->input('promoter_id');
		echo $this->Form->input('admin_credit_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Credit.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Credit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Order Groups'), array('controller' => 'order_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Group'), array('controller' => 'order_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Types'), array('controller' => 'credit_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Type'), array('controller' => 'credit_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promoters'), array('controller' => 'promoters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promoter'), array('controller' => 'promoters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Credits'), array('controller' => 'admin_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Credit'), array('controller' => 'admin_credits', 'action' => 'add')); ?> </li>
	</ul>
</div>
