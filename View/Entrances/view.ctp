<div class="entrances view">
<h2><?php echo __('Entrance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entrance['User']['id'], array('controller' => 'users', 'action' => 'view', $entrance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('location_id'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['location_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entrance'), array('action' => 'edit', $entrance['Entrance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entrance'), array('action' => 'delete', $entrance['Entrance']['id']), array(), __('Are you sure you want to delete # %s?', $entrance['Entrance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
