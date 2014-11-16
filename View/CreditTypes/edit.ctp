<div class="creditTypes form">
<?php echo $this->Form->create('CreditType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CreditType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CreditType.id'))); ?></li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
