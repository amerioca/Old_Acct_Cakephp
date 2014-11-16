<!DOCTYPE html><?php debug($Name);?>
<html>
<head>
    <meta http-equiv="refresh" content="500; /credits/start">
</head>
<?php //debug($Name); ?>
<body>
<p>
<center>
    <?php echo __('Thanks for your order'); ?><br>
    <font color="red"><?php echo $Name['first_name'] . ' ' . $Name['last_name'];?></font><br>
    <?php echo __('Your Que Number is ').substr($order_id, -4).__(' followed by the last digits of your Phone');?><br>
    <?php echo substr($order_id, -4).'/'.substr($Name['username'], -4); ?><br>
    <?php echo __('Please Pick up your Drinks at the bar you requested.'); ?><br>
    <?php echo __('You may try to tip your barman and be served ahead of Que.');?>
    <form method="post" action="/orders/start">
        <div class="submit"></div><input type="submit" data-ajax="false" name="Done" value="<?php echo __('Done');?>"></div>
    </form>
</center></p>
</body>
</html>