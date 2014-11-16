<div class="discountTypes form">
<?php echo $this->Form->create('DiscountType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discount Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DiscountType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DiscountType.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>