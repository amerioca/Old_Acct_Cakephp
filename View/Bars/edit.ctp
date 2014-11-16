<div class="bars form">
<?php echo $this->Form->create('Bar'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bar'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bar.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bar.id'))); ?></li>
	</ul>
</div><?php echo $this->element('sidebar'); ?>
