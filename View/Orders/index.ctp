<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('barman_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bar_id'); ?></th>
			<th><?php echo $this->Paginator->sort('waiter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody><?php  // debug($orders); ?>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['OrderGroup']['id'], array('controller' => 'order_groups', 'action' => 'view', $order['OrderGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['OrderGroup']['username'], array('controller' => 'customers', 'action' => 'view', $order['OrderGroup']['username'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Item']['name'], array('controller' => 'items', 'action' => 'view', $order['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['OrderType']['name'], array('controller' => 'order_types', 'action' => 'view', $order['OrderType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Barman']['id'], array('controller' => 'barmen', 'action' => 'view', $order['Barman']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Bar']['name'], array('controller' => 'bars', 'action' => 'view', $order['Bar']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Waiter']['id'], array('controller' => 'waiters', 'action' => 'view', $order['Waiter']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div><?PHP /*
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Types'), array('controller' => 'order_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Type'), array('controller' => 'order_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Barmen'), array('controller' => 'barmen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barman'), array('controller' => 'barmen', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bars'), array('controller' => 'bars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bar'), array('controller' => 'bars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Waiters'), array('controller' => 'waiters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Waiter'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
	</ul>
</div> */?>
<?php echo $this->element('sidebar'); ?>
