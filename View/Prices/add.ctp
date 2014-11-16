<div class="prices form">
<?php echo $this->Form->create('Price'); ?>
	<fieldset>
		<legend><?php echo __('Add Price'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prices'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
