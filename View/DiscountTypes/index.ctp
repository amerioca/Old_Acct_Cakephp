<div class="discountTypes index">
	<h2><?php echo __('Discount Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions" style="text-align: center"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($discountTypes as $discountType): ?>
	<tr>
		<td><?php echo h($discountType['DiscountType']['id']); ?>&nbsp;</td>
		<td><?php echo h($discountType['DiscountType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discountType['DiscountType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discountType['DiscountType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discountType['DiscountType']['id']), array(), __('Are you sure you want to delete # %s?', $discountType['DiscountType']['id'])); ?>
            <?php echo $this->Html->link(__('All Users with Discount'), array('action' => 'lists', 'users', $discountType['DiscountType']['id'])); ?>
            <?php echo $this->Html->link(__('Logged in Users'), array('action' => 'lists', 'loggedin', $discountType['DiscountType']['id'])); ?>
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
