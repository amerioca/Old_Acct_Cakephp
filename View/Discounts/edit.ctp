<div class="discounts form">
<?php echo $this->Form->create('Discount'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discount'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('discount_type_id');
		echo $this->Form->input('percent');
		echo $this->Form->input('interval');
		echo $this->Form->input('amount');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Discount.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Discount.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>