<div class="prices form">
<?php echo $this->Form->create('Price'); ?>
	<fieldset>
		<legend><?php echo __('Edit Price'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Price.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Price.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>