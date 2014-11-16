<div class="orderGroups view">
<h2><?php echo __('Order Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderGroup['OrderGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($orderGroup['OrderGroup']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($orderGroup['OrderGroup']['username']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Group'), array('action' => 'edit', $orderGroup['OrderGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Group'), array('action' => 'delete', $orderGroup['OrderGroup']['id']), array(), __('Are you sure you want to delete # %s?', $orderGroup['OrderGroup']['id'])); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($orderGroup['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Group Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Order Type Id'); ?></th>
		<th><?php echo __('Barman Id'); ?></th>
		<th><?php echo __('Bar Id'); ?></th>
		<th><?php echo __('Waiter Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderGroup['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['order_group_id']; ?></td>
			<td><?php echo $order['customer_id']; ?></td>
			<td><?php echo $order['item_id']; ?></td>
			<td><?php echo $order['order_type_id']; ?></td>
			<td><?php echo $order['barman_id']; ?></td>
			<td><?php echo $order['bar_id']; ?></td>
			<td><?php echo $order['waiter_id']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), array(), __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
