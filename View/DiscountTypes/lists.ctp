<div class="discountTypes index">
    <h2><?php echo __('List Users'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Group</th>
            <th>Discount</th>
            <th class="actions" style="text-align: center"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody><?php //debug($Users);?>
        <?php foreach ($Users as $User): //debug($User); ?>
        <tr>
            <td><?php echo h($User['User']['id']); ?>&nbsp;</td>
            <td><?php echo h($User['User']['name']); ?>&nbsp;</td>

            <td><?php echo h($User['User']['username']); ?>&nbsp;</td>
            <td><?php echo h($User['UserGroup']['name']); ?>&nbsp;</td>
            <td><?php echo h($User['Discount']['name']); ?>&nbsp;</td>
            <td class="actions">
                <?php //echo $this->Html->link(__('View'), array('action' => 'view', $User['DiscountType']['id'])); ?>
                <?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $User['DiscountType']['id'])); ?>
                <?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $User['DiscountType']['id']), array(), __('Are you sure you want to delete # %s?', $User['DiscountType']['id'])); ?>
                <?php //echo $this->Html->link(__('All Users with Discount'), array('action' => 'lists', 'users', $User['DiscountType']['id'])); ?>
                <?php //echo $this->Html->link(__('Logged in Users'), array('action' => 'lists', 'loggedin', $User['DiscountType']['id'])); ?>
            </td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo $this->element('sidebar'); ?>
