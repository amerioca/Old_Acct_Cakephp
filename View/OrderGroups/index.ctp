<div class="orderGroups index">
	<h2><?php echo __('Order Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orderGroups as $orderGroup): ?>
	<tr>
		<td><?php echo $this->html->link($orderGroup['OrderGroup']['id'], array('action'=>'lists', 'order_id', $orderGroup['OrderGroup']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->html->link($orderGroup['OrderGroup']['username'], array('action'=>'lists', 'user_id', $orderGroup['OrderGroup']['username'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderGroup['OrderGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderGroup['OrderGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderGroup['OrderGroup']['id']), array(), __('Are you sure you want to delete # %s?', $orderGroup['OrderGroup']['username'])); ?>
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
<?php echo $this->element('sidebar'); ?>
