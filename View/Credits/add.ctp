<div class="credits form"><?php //debug($customer); ?>
<?php echo $this->Form->create('Credit'); ?>
	<fieldset>
		<legend><?php echo __('Add Credit'); ?></legend>
        <input type="hidden" name="data[Credit][user_id]" value="<?php echo $customer['User']['id'];?>">
        <input type="hidden" name="data[User][id]" value="<?php echo $customer['User']['id'];?>">
        <input type="hidden" name="data[Credit][admin_credit_id]" value="<?php echo $this->Session->read('UserAuth.User.id');?>">
        <input type="hidden" name="data[Credit][promoter_id]" value="<?php echo $customer['User']['promoter_id'];?>">
        <?php //<input type="hidden" name="data['Credit]['credit_type_id']" value="5">?>
	<?php //debug($promoters);
		echo $this->Form->input('amount', array('label'=>__('Paid - (Cash Received')));
        echo $this->Form->input('Cost.Entrance', array(
            'options'=>array(
                '0/0'=>'0$R',
                '-20/0'=>'20$R '.__('Entrance'),
                '-20/20'=>'20$R '.__('Entrance').' :: 20$R '.__('Credit'),
                '-30/20'=>'30$R '.__('Entrance').' :: 20$R '.__('Credit'),
                '-50/20'=>'50$R '.__('Entrance').' :: 20$R '.__('Credit')
    )));
		//echo $this->Form->input('credit_type_id', array('default'=>6));
        //$customer['User']['allowedcredit']==0? $ac=0 : $ac=1;
        echo $this->Form->input('User.location_id', array('options'=>array(1=>__('Checkin'),0=>__('Checkout')),'default'=>1));
        echo $this->Form->input('User.allowedcredit', array('value'=>200));
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
