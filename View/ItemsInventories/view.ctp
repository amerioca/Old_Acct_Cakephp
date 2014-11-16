<div class="itemsInventories view">
<h2><?php echo __('Items Inventory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsInventory['ItemsInventory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsInventory['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsInventory['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inventory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsInventory['Inventory']['id'], array('controller' => 'inventories', 'action' => 'view', $itemsInventory['Inventory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Inventory'), array('action' => 'edit', $itemsInventory['ItemsInventory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Inventory'), array('action' => 'delete', $itemsInventory['ItemsInventory']['id']), array(), __('Are you sure you want to delete # %s?', $itemsInventory['ItemsInventory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Inventories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Inventory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
	</ul>
</div>
