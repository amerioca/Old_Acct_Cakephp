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
    <?php if(isset($image)){ ?>
    <iframe src="/Barcodes/barcode/<?= $image;?>"></iframe>
    <button onclick="pop();">
        Pop</button>
    <script type="text/javascript">
        var POP;
        function pop() {
            var newWin = window.open('', 'thePopup', 'width=350,height=350');
            newWin.document.write("<html><head><title>popup</title></head><body><h1>Pop</h1>" +
                    "<p>Print me</p><a href='print.html' onclick='window.print();return false;'>" +
                    "<img src='/webroot/img/barcode/<?= $image;?>'.png' height='32px' width='32px'></a></body></html>");
            newWin.window.location.reload();    // this is the secret ingredient
            newWin.focus();                     // not sure if this line is necessary
            newWin.print();
        }
    </script>

<? } ?>

<?php echo $this->Form->create('User'); ?>
        <?php
    echo $this->Form->input('Cost.amount', array('label'=>__('Paid - (Cash Received)')));
    echo $this->Form->input('Cost.Entrance', array(
                'options'=>array(
                    '0/0'=>'0$R',
                    '-20/0'=>'20$R '.__('Entrance'),
                    '-20/20'=>'20$R '.__('Entrance').' :: 20$R '.__('Credit'),
                    '-30/20'=>'30$R '.__('Entrance').' :: 20$R '.__('Credit'),
                    '-50/20'=>'50$R '.__('Entrance').' :: 20$R '.__('Credit')
                ))); ?><?
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
    <input type="hidden" name="data[Cost][admin_credit_id]" value="<?php echo $this->Session->read('UserAuth.User.id');?>">
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
