<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['OrderGroup']['name'], array('controller' => 'order_groups', 'action' => 'view', $order['OrderGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Item']['name'], array('controller' => 'items', 'action' => 'view', $order['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['OrderType']['name'], array('controller' => 'order_types', 'action' => 'view', $order['OrderType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barman'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Barman']['id'], array('controller' => 'barmen', 'action' => 'view', $order['Barman']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bar'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Bar']['name'], array('controller' => 'bars', 'action' => 'view', $order['Bar']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waiter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Waiter']['id'], array('controller' => 'waiters', 'action' => 'view', $order['Waiter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
</ul>
</div>
<?php echo $this->element('sidebar'); ?>
