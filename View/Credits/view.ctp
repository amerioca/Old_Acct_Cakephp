<div class="credits view">
<h2><?php echo __('Credit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['OrderGroup']['id'], array('controller' => 'order_groups', 'action' => 'view', $credit['OrderGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['User']['id'], array('controller' => 'users', 'action' => 'view', $credit['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['CreditType']['id'], array('controller' => 'credit_types', 'action' => 'view', $credit['CreditType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Promoter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['Promoter']['name'], array('controller' => 'promoters', 'action' => 'view', $credit['Promoter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Credit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['AdminCredit']['name'], array('controller' => 'admin_credits', 'action' => 'view', $credit['AdminCredit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit'), array('action' => 'edit', $credit['Credit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit'), array('action' => 'delete', $credit['Credit']['id']), array(), __('Are you sure you want to delete # %s?', $credit['Credit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit'), array('action' => 'add')); ?> </li>
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
