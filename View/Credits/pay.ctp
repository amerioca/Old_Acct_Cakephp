<div class="credits form"><?php //debug($customer); ?>
    <?php echo $this->Form->create('Credit'); ?>
    <fieldset>
        <legend><?php echo __('Add Credit'); ?></legend>
        <input type="hidden" name="data[Credit][user_id]" value="<?php echo $customer['User']['id'];?>">
        <input type="hidden" name="data[Credit][admin_credit_id]" value="<?php echo $this->Session->read('UserAuth.User.id');?>">
        <input type="hidden" name="data[Credit][promoter_id]" value="<?php echo $customer['User']['promoter_id'];?>">
        <?php //<input type="hidden" name="data['Credit]['credit_type_id']" value="5">?>
        <?php //debug($promoters);
        echo $this->Form->input('amount', array('value'=>abs($credits[0][0]['credits'])));
        echo $this->Form->input('credit_type_id', array('default'=>5));
        //echo $this->Form->input('promoter_id', array('options'=>$promoters,'empty'=>(__('None')),
        //'default'=>7
        //));
        //echo $this->Form->input('admin_credit_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>

</div>
