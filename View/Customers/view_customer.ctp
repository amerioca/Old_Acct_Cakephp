<div class="Customer view"><?php //debug($customer);?>
    <h2><?php echo __('Customer'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo $customer['User']['id'];?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customers Name'); ?></dt>
        <dd>
            <?php echo $customer['User']['first_name'] . ' ' . $customer['User']['last_name']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Login (Username)'); ?></dt>
        <dd>
            <?php echo $customer['User']['username']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('PIN'); ?></dt>
        <dd>
            <?php echo $customer['User']['pin']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('EMail'); ?></dt>
        <dd>
            <?php echo $customer['User']['email']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Barcode'); ?></dt>
        <dd>
            <?php echo $customer['User']['barcode']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Group'); ?></dt>
        <dd>
            <?php echo $this->Html->link($customer['UserGroup']['name'], array('controller' => 'users', 'action' => 'view', $customer['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Discount'); ?></dt>
        <dd>
            <?php echo h($customer['Discount']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Credits'); //debug($credit); ?></dt>
        <dd>
            <?php
            if (isset($credit[0][0]['credits'])) {
                echo $this->Html->link($credit[0][0]['credits'], array('controller' => 'credits', 'action' => 'lists', $customer['User']['id']));
            } else echo '-0-';
            ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Promoter'); ?></dt>
        <dd>
            <?php echo $customer['Promoter']['first_name'] . ' ' . $customer['Promoter']['last_name'] . ' - ' . $customer['Promoter']['username'];?>
            <?php //echo $this->Html->link($customer['Promoter']['name'], array('controller' => 'promoters', 'action' => 'view', $customer['Promoter']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Admin Credit'); ?></dt>
        <dd>
            <?php //echo $this->Html->link($customer['AdminCredit']['name'], array('controller' => 'admin_customers', 'action' => 'view', $customer['AdminCredit']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Active'); ?></dt>
        <dd>
            <?php echo $customer['User']['active']==true? __('Yes') : __('No'); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Allowed Credit'); ?></dt>
        <dd>
            <?php echo $customer['User']['allowedcredit']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Checked In'); ?></dt>
        <dd>
            <?php echo $customer['User']['location_id']==true? __('Yes') : __('No'); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($customer['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($customer['User']['modified']); ?>
            &nbsp;
        </dd>
        <dt>
            <?php echo $customer['Map']['followme']; //debug($customer);?>
        </dt>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><a href="/Customers/addCustomer/"><?php echo __('New Customer');?></a></li>
        <li><a href="/Customers/editCustomer/<?php echo $customer['User']['id'];?>/"><?php echo __('Edit Customer');?></a></li>
        <li><a href="/credits/add/<?php echo $customer['User']['id'];?>">Add Credit</a></li>
        <?php
        if (isset($credit[0][0]['credits']) && $credit[0][0]['credits']<0) {
            echo '<li><a href="/credits/pay/'.$customer['User']['id'].'">Pay Bill</a></li>';
        }
        ?>
        <li><a href="/credits/start/forgotPin/<?php echo $customer['User']['id'];?>">Send PIN</a></li>
        <?php if ($customer['User']['location_id'] == 0)

    echo '<li><a href="/Customers/enter/' . $customer['User']['id'] . '">Enter Customer</a> </li>';
 else
    echo '<li><a href="/Customers/out/' . $customer['User']['id'] . '">Exit Customer</a> </li>';?>
    </ul>
   
</div >
