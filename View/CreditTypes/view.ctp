<div class="creditTypes view">
<h2><?php echo __('Credit Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($creditType['CreditType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($creditType['CreditType']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit Type'), array('action' => 'edit', $creditType['CreditType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit Type'), array('action' => 'delete', $creditType['CreditType']['id']), array(), __('Are you sure you want to delete # %s?', $creditType['CreditType']['id'])); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
<div class="related">
	<h3><?php echo __('Related Credits'); ?></h3>
	<?php if (!empty($creditType['Credit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Credit Type Id'); ?></th>
		<th><?php echo __('Promoter Id'); ?></th>
		<th><?php echo __('Admin Credit Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($creditType['Credit'] as $credit): ?>
		<tr>
			<td><?php echo $credit['id']; ?></td>
			<td><?php echo $credit['user_id']; ?></td>
			<td><?php echo $credit['credit_type_id']; ?></td>
			<td><?php echo $credit['promoter_id']; ?></td>
			<td><?php echo $credit['admin_credit_id']; ?></td>
			<td><?php echo $credit['amount']; ?></td>
			<td><?php echo $credit['created']; ?></td>
			<td><?php echo $credit['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'credits', 'action' => 'view', $credit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'credits', 'action' => 'edit', $credit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'credits', 'action' => 'delete', $credit['id']), array(), __('Are you sure you want to delete # %s?', $credit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
