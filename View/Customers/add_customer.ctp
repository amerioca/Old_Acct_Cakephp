<?php /*
  *
  * http://www.maclife.com/article/columns/terminal_101_printing_command_line
  * system('lp -d Brother_QL_700 5521969775363.png');  */ ?>
<script type="text/javascript">
    if (!("autofocus" in document.createElement("input"))) {
        document.getElementById("UserUsername").focus();
    }
</script>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>

        <div class="input select"><label for="CreditAmount">Entrance</label><select name="data[Credit][amount]" id="CreditAmount">
            <option value="0">No Credit</option>
            <option value="20">20$R</option>
            <option value="30">30$R</option>
            <option value="40">40$R</option>
        </select></div><?
		echo $this->Form->input('username',array('autofocus'=>'autofocus', 'label'=>__('Phone Number, or Card Reader')));
        echo $this->Form->input('first_name', array('placeholder'=>'http://'));
        echo $this->Form->input('barcode');
        echo $this->Form->input('promoter_id', array('empty'=>__('None'), 'default'=>''));
        echo $this->Form->input('last_name');
		echo $this->Form->input('email');
        echo $this->Form->input('pin');

        //	echo $this->Form->input('user_group_id');
        echo $this->Form->input('discount_id');

	//	echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Entered Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Customer Phone'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Customer Barcode'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
