<div class="credits form"><?php //debug($User);?>
    <?php echo $this->Form->create('Credit', array('url'=>array('action'=>'submit'))); ?>
    <fieldset>
        <legend><?php echo __('Add Credit'); ?></legend>
        <?php
        //echo $this->Form->input('user_id');
        echo $this->Form->input('amount'); ?>
        <input type="hidden" name="data[Credit][user_id]" value="<?php echo $User['User']['id'];?>">
        <input type="hidden" name="data[Credit][credit_type_id]" value="<?php echo @$creditType;?>">
        <input type="hidden" name="data[Credit][promoter_id]" value="<?php echo @$User['User']['promoter_id'];?>">
        <input type="hidden" name="data[Credit][admin_credit_id]" value="<?php echo $this->Session->read('user.User.id');?>">
        <?
        //echo $this->Form->input('credit_type_id');
        //echo $this->Form->input('promoter_id');
        //echo $this->Form->input('admin_credit_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    <?php echo '<a href="/credits/submit/cancel/">' . __('Cancel') . '</a>';
    ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
</div>
