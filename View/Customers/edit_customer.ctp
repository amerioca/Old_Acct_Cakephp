<div class="Customer view"><?php //debug($customer);?>
    <?php echo $this->form->create();?>
    <h2><?php echo __('Customer'); ?></h2>
    <dl>
        <dd>
            <?php echo $this->form->input('User.id');?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.first_name'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.username'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.pin'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.email'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.barcode'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.promoter_id', array('empty'=>'')); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.discount_id'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.last_name');?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.active'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.allowedcredit'); ?>
            &nbsp;
        </dd>
        <dd>
            <?php echo $this->form->input('User.location_id', array('empty'=>'')); ?>
            &nbsp;
        </dd>
    </dl>
    <?php echo $this->form->end('submit');?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><a href="/Customers/addCustomer/"><?php echo __('New Customer');?></a></li>
        <li><a href="/credits/add/<?php //echo $customer['User']['id'];?>">Add Credit</a></li>
        <?php
        if (isset($credit[0][0]['credits']) && $credit[0][0]['credits']<0) {
            //echo '<li><a href="/credits/pay/'.$customer['User']['id'].'">Pay Bill</a></li>';
        }
        ?>
        <li><a href="/credits/start/forgotPin/<?php //echo $customer['User']['id'];?>">Send PIN</a></li>
        <?php //if ($customer['User']['location_id'] == 0)

        //echo '<li><a href="/Customers/enter/' . $customer['User']['id'] . '">Enter Customer</a> </li>';
    //else
        //echo '<li><a href="/Customers/out/' . $customer['User']['id'] . '">Exit Customer</a> </li>';?>
    </ul>

</div >
