<div class="orderGroups index"><?php //debug($order);?>
    <h2><?php echo __('Order Groups'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo __('Item'); ?></th>
            <th><?php echo __('Quantity'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($order as $key => $orderGroup): ?>
        <tr>
            <td><?php echo $orderGroup['Item']['name'].' '.$orderGroup['Item']['ml'].' ml';?></td>
            <td><?php echo h($quantity[$key]['Quantity']); ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $orderGroup['OrderGroup']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderGroup['OrderGroup']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderGroup['OrderGroup']['id']), array(), __('Are you sure you want to delete # %s?', $orderGroup['OrderGroup']['id'])); ?>
            </td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo $this->element('sidebar'); ?>
