<div class="inventories form">
    <?php echo $this->Form->create('Inventory'); ?>
    <fieldset>
        <legend><?php echo __('Add Inventory'); ?></legend>
        <?php
        //echo $this->Form->input('product_id');
        echo $this->Form->input(__('Insert.quantity'));
        echo $this->Form->input('cost');
        //echo $this->Form->input('ml');
        echo $this->Form->input('ProductBarcode.barcode');
        //echo $this->Form->input('Item');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('sidebar'); ?>
