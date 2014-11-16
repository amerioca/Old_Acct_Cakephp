<? //debug($total); debug($product); debug($data); ?>
<div class="inventories form" xmlns="http://www.w3.org/1999/html">
    <?php echo $this->Form->create('Inventory'); ?>
    <table>
        <tr>
            <td>Insert:</td>
            <td><?php echo $product['Product']['name'];?> <?php echo $product['Product']['ml'];?>ml</td>
        </tr>
        <tr>
            <td>Cost Each:</td>
            <td><?php echo $data['Inventory']['cost'];?></td>
        </tr>
        <tr>
            <td>Quantity:</td>
            <td><?php echo $data['Insert']['quantity'];?></td>
        </tr>
        </td>
        <tr>
            <td>Total Cost:</td>
            <td><?php echo $total;?></td>
        </tr>

    </table>
    <input type="hidden" name="data[Insert][quantity]" value="<?php echo $data['Insert']['quantity'];?>">
    <input type="hidden" name="data[Inventory][product_id]" value="<?php echo $product['Product']['id']; ?>">
    <input type="hidden" name="data[Inventory][cost]" value="<?php echo $data['Inventory']['cost'];?>">
    <input type="hidden" name="data[Inventory][ml]" value="<?php echo $product['Product']['ml'];?>">
    <input type="hidden" name="data[Insert][confirmed]" value="1">
    <input type="submit">
    </form>
</div>
<?php echo $this->element('sidebar'); ?>