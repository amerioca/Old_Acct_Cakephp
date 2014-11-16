<div class="productBarcodes index">
	<h2><?php echo __('Product Barcodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productBarcodes as $productBarcode): ?>
	<tr>
		<td><?php echo h($productBarcode['ProductBarcode']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productBarcode['Product']['name'], array('controller' => 'products', 'action' => 'view', $productBarcode['Product']['id'])); ?>
		</td>
		<td><?php echo h($productBarcode['ProductBarcode']['barcode']); ?>&nbsp;</td>
		<td><?php echo h($productBarcode['ProductBarcode']['created']); ?>&nbsp;</td>
		<td><?php echo h($productBarcode['ProductBarcode']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productBarcode['ProductBarcode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productBarcode['ProductBarcode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productBarcode['ProductBarcode']['id']), array(), __('Are you sure you want to delete # %s?', $productBarcode['ProductBarcode']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php echo $this->element('sidebar'); ?>
