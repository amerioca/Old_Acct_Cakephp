<div class="discountsUsers form">
<?php echo $this->Form->create('DiscountsUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discounts User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('discount_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DiscountsUser.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DiscountsUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discounts Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
