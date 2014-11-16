<div class="productBarcodes view">
<h2><?php echo __('Product Barcode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productBarcode['ProductBarcode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productBarcode['Product']['name'], array('controller' => 'products', 'action' => 'view', $productBarcode['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($productBarcode['ProductBarcode']['barcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productBarcode['ProductBarcode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productBarcode['ProductBarcode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Barcode'), array('action' => 'edit', $productBarcode['ProductBarcode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Barcode'), array('action' => 'delete', $productBarcode['ProductBarcode']['id']), array(), __('Are you sure you want to delete # %s?', $productBarcode['ProductBarcode']['id'])); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>