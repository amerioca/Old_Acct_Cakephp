<div class="discountTypes view">
<h2><?php echo __('Discount Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discountType['DiscountType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($discountType['DiscountType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discount Type'), array('action' => 'edit', $discountType['DiscountType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discount Type'), array('action' => 'delete', $discountType['DiscountType']['id']), array(), __('Are you sure you want to delete # %s?', $discountType['DiscountType']['id'])); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
<div class="related">
	<h3><?php echo __('Related Discounts'); ?></h3>
	<?php if (!empty($discountType['Discount'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Discount Type Id'); ?></th>
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Interval'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discountType['Discount'] as $discount): ?>
		<tr>
			<td><?php echo $discount['id']; ?></td>
			<td><?php echo $discount['name']; ?></td>
			<td><?php echo $discount['discount_type_id']; ?></td>
			<td><?php echo $discount['percent']; ?></td>
			<td><?php echo $discount['interval']; ?></td>
			<td><?php echo $discount['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'discounts', 'action' => 'view', $discount['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'discounts', 'action' => 'edit', $discount['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'discounts', 'action' => 'delete', $discount['id']), array(), __('Are you sure you want to delete # %s?', $discount['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
