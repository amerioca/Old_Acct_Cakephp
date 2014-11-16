<div class="discounts index">
	<h2><?php echo __('Discounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('percent'); ?></th>
			<th><?php echo $this->Paginator->sort('interval'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions" style="text-align: center"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($discounts as $discount): ?>
	<tr>
		<td><?php echo h($discount['Discount']['id']); ?>&nbsp;</td>
		<td><?php echo h($discount['Discount']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($discount['DiscountType']['name'], array('controller' => 'discount_types', 'action' => 'view', $discount['DiscountType']['id'])); ?>
		</td>
		<td><?php echo h($discount['Discount']['percent']); ?>&nbsp;</td>
		<td><?php echo h($discount['Discount']['interval']); ?>&nbsp;</td>
		<td><?php echo h($discount['Discount']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discount['Discount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discount['Discount']['id'])); ?>
			<?php echo $this->Form->postLink(__('Del'), array('action' => 'delete', $discount['Discount']['id']), array(), __('Are you sure you want to delete # %s?', $discount['Discount']['id'])); ?>
            <?php echo $this->Html->link(__('All'), array('action' => 'lists', 'users', $discount['Discount']['id'])); ?>
            <?php echo $this->Html->link(__('Logged in'), array('action' => 'lists', 'loggedin', $discount['Discount']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Admins'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Barmen'), array('controller' => 'barmen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barman'), array('controller' => 'barmen', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Managers'), array('controller' => 'managers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'managers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Privileged'), array('controller' => 'privilegeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Privileged'), array('controller' => 'privilegeds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promoters'), array('controller' => 'promoters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promoter'), array('controller' => 'promoters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Superemployees'), array('controller' => 'superemployees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superemployee'), array('controller' => 'superemployees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Waiters'), array('controller' => 'waiters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Waiter'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
