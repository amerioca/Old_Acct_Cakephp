<?php echo $this->Form->create('Order'); ?>
<table>
    <tr>
        <td><?php echo __('Phone Number');?>:</td>
        <td><input type="text" name="data[User][username]"></td>
    </tr>
    <tr>
        <td>
            <?php echo __('PIN');?>:
        </td>
        <td><input type="password" name="data[User][pin]"></td>
    </tr>
</table>
<?php //echo $this->Form->end(__('Submit')); ?>

<div class="submit">
    <input type="submit" value="Submit">
    <input type="submit" value="<?php echo __('Forgot PIN');?>" name="forgotPin"></div>
</form>
<form method="post"><?php echo __('Barcode');?>: <input type="text" name="barcode" autofocus>
    <input type="submit" style="display: none;"> </form>

<?php //($User);?>