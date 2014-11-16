<?php /*system('lp -d Brother_QL_700 5521969775363.png');  */ ?>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('discount_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('salt');
		echo $this->Form->input('email');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email_verified');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Credits'), array('controller' => 'admin_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Credit'), array('controller' => 'admin_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrances'), array('controller' => 'entrances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrance'), array('controller' => 'entrances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Login Tokens'), array('controller' => 'login_tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Login Token'), array('controller' => 'login_tokens', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Types'), array('controller' => 'order_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Type'), array('controller' => 'order_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
