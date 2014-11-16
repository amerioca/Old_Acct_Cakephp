<?php //debug($User); ?>
<div class="entrances xindex">
    <h2><?php echo __('Entrances'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Group</th>
            <th>Discount</th>
            <th>Entered</th>
            <th>Credit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($User as $key => $user): ?>
        <tr>
            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
    <td><?php echo h($user['User']['first_name'] . ' ' . $user['User']['last_name']); ?>&nbsp;</td>
    <td>
        <?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
    </td>
    <td><?php echo h($user['UserGroup']['name']); ?>&nbsp;</td>
    <td><?php echo h($user['Discount']['name']); ?>&nbsp;</td>
    <td><?php echo h($entrances[$key]['Entrance']['created']); ?>&nbsp;</td>
    <?php //debug($credits); ?>
    <?php if (isset($credits[$key][0][0]['credits'])){ ?>
        <td ><?php echo h($credits[$key][0][0]['credits']); ?>&nbsp;</td>
                <?php } else echo '<td>0</td>'; ?>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
