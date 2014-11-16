<?php $user = $this->UserAuth->getUser(); //debug($user); ?>
<?php
$ipAddress=$_SERVER['REMOTE_ADDR'];
?>
<?php //echo $this->Html->Script(array('jquery.mobile','addField')); ?>
<?php //echo $this->Html->Css(array('addField')); ?>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
		echo $this->Form->input('order_group_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('order_type_id');
		echo $this->Form->input('barman_id');
		echo $this->Form->input('bar_id');
		echo $this->Form->input('waiter_id');
	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<style>
    .input_fields_wrap input[type=text] {
        padding: 0px 5px 0px 5px;
        margin: 0 3px 3px 0;
        font-size: 0.90em;
        line-height: 0.90em;
        font-weight: normal;
    }
    .input_fields_wrap .remove_field{
        font-size: 0.80em;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>
<?php echo $this->element('sidebar'); ?>
