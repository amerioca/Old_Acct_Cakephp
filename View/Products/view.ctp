<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ml'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ml']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Labelnumber'); ?></dt>
		<dd>
			<?php echo h($product['Product']['labelnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($product['Product']['barcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labels'), array('controller' => 'labels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label'), array('controller' => 'labels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Barcodes'), array('controller' => 'product_barcodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Barcode'), array('controller' => 'product_barcodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Labels'); ?></h3>
	<?php if (!empty($product['Label'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $product['Label']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
	<?php echo $product['Label']['product_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
	<?php echo $product['Label']['length']; ?>
&nbsp;</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
	<?php echo $product['Label']['count']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Label'), array('controller' => 'labels', 'action' => 'edit', $product['Label']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Inventories'); ?></h3>
	<?php if (!empty($product['Inventory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Ml'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Inventory'] as $inventory): ?>
		<tr>
			<td><?php echo $inventory['id']; ?></td>
			<td><?php echo $inventory['product_id']; ?></td>
			<td><?php echo $inventory['cost']; ?></td>
			<td><?php echo $inventory['ml']; ?></td>
			<td><?php echo $inventory['created']; ?></td>
			<td><?php echo $inventory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inventories', 'action' => 'view', $inventory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inventories', 'action' => 'edit', $inventory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inventories', 'action' => 'delete', $inventory['id']), array(), __('Are you sure you want to delete # %s?', $inventory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Barcodes'); ?></h3>
	<?php if (!empty($product['ProductBarcode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['ProductBarcode'] as $productBarcode): ?>
		<tr>
			<td><?php echo $productBarcode['id']; ?></td>
			<td><?php echo $productBarcode['product_id']; ?></td>
			<td><?php echo $productBarcode['barcode']; ?></td>
			<td><?php echo $productBarcode['created']; ?></td>
			<td><?php echo $productBarcode['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_barcodes', 'action' => 'view', $productBarcode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_barcodes', 'action' => 'edit', $productBarcode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_barcodes', 'action' => 'delete', $productBarcode['id']), array(), __('Are you sure you want to delete # %s?', $productBarcode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Barcode'), array('controller' => 'product_barcodes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
