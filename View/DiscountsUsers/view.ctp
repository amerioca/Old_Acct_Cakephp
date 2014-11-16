<div class="discountsUsers view">
<h2><?php echo __('Discounts User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discountsUser['DiscountsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discountsUser['Discount']['name'], array('controller' => 'discounts', 'action' => 'view', $discountsUser['Discount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discountsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $discountsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($discountsUser['DiscountsUser']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discounts User'), array('action' => 'edit', $discountsUser['DiscountsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discounts User'), array('action' => 'delete', $discountsUser['DiscountsUser']['id']), array(), __('Are you sure you want to delete # %s?', $discountsUser['DiscountsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discounts User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
