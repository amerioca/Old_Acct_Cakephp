<?php //debug($Items); ?>
<?php echo $this->Html->Script('jquery.mobile-1.4.3.min');

$i = 1;
foreach ($Categories as $Category) {
    //debug($Category);
    $category[$i]['name'] = str_replace(' ', '_', $Category['Category']['name']);
    $category[$i]['id'] = $Category['Category']['id'];

    $ii = 0;
    foreach ($Category['Item'] as $Items) {
        $Item[$i][$ii]['id'] = $Items['id'];
        $Item[$i][$ii]['name'] = $Items['name'] . ' ' . $Items['ml'] . 'ml';
        //debug($Items['Price']);
        @$Item[$i][$ii]['price'] = $Items['Price'][0]['price'];
        //debug($Items);
        $ii++;
    }
    $i++;
} //debug($Item)
?>
<div><?php echo $this->Session->read('ouser.User.id');?></div>
<div data-role="tabs" id="tabs">
    <div data-role="navbar">
        <ul><?php
            foreach ($category as $cat_title) {
                echo '<li><a href="#' . $cat_title['name'] . '" data-ajax="false">' . str_replace('_', ' ', $cat_title['name']) . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <?php
    foreach ($category as $cat_title) {
        echo '<div id="' . $cat_title['name'] . '" class="ui-body-d ui-content">';
        echo '<ul data-inset="true">';
        //echo '<ul>';  data-role="listview"
        foreach ($Item[$cat_title['id']] as $items) {
            //debug($items);
            echo '<li><a href="/orders/start/' . $items['id'] . '" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">' . $items['name'] . ' $R ' . $items['price'] . '</a>
            <a href="/orders/start/' . $items['id'] . '/1" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">1</a>
            <a href="/orders/start/' . $items['id'] . '/2" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">2</a>
            <a href="/orders/start/' . $items['id'] . '/3" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">3</a>
            <a href="/orders/start/' . $items['id'] . '/4" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">4</a>
            <a href="/orders/start/' . $items['id'] . '/5" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">5</a>
            <a href="/orders/start/' . $items['id'] . '/6" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">6</a>
            <a href="/orders/start/' . $items['id'] . '/7" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">7</a>
            <a href="/orders/start/' . $items['id'] . '/8" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">8</a>
            <a href="/orders/start/' . $items['id'] . '/9" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">9</a>
            <a href="/orders/start/' . $items['id'] . '/10" data-ajax="false" class="ui-btn ui-btn-inline ui-mini">10</a></li>';
            //echo '<li><a href="/orders/start/' . $items['id'] . '" data-ajax="false">'.$items['name'].' $R '.$items['price'].'</a>xxx<a href="">1</a></li>';
        }
        //debug($cat_title);
        echo '</ul>';
        echo '</div>';
    }
    ?>
    <table>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Credits: <font color="red"><?php echo $credits;?></font></td>
            <td><?php echo __('Allowed Credit: ') .'<font color="red">'. $this->Session->read('ouser.User.allowedcredit'); ?></font></td>
        </tr>
    </table>
<table>
    <?
    if ($order = $this->Session->read('order')) { //debug($this->Session->read('ouser'));
        ?>


        <thead>
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <?php
        $total = 0;
        foreach ($order as $key => $value) { //debug($value);
            echo '<tr><td>' . $value['name'] . ' <a href="/orders/start/' . $key . '/0" class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all ui-btn-inline" data-ajax="false">No text</a></td><td>' . $value['quantity'] . '</td><td>' . $value['price'] . '</td><td>' . $value['total'] . '</td></tr>';
            $total = $value['total'] + $total;
        } ?>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Total:</td>
            <td><?php echo $total; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Remaining Credit:<br>
                (<?php echo $credits+$this->Session->read('ouser.User.allowedcredit') . ' - ' . $total;?>)
            </td>
            <td><?php echo $credits+$this->Session->read('ouser.User.allowedcredit') - $total;?></td>
        </tr>
        </table>
<div <?php if (($credits - $total) <  -$this->Session->read('ouser.User.allowedcredit')) echo 'style="display: none"';?>>
    <?php
    foreach ($Bars as $Bar) {
        //debug($Bar);
        echo '<a href="/orders/submit/bar/' . $Bar['Bar']['id'] . '" data-ajax="false">' . __('Pickup on Floor: ') . $Bar['Bar']['name'] . '</a><br>';
    } ?>
</div> <?php debug(-$this->Session->read('ouser.User.allowedcredit')); debug($credits - $total); ?>
        <div <?php if (($credits - $total) >=  -$this->Session->read('ouser.User.allowedcredit')) echo 'style="display: none"';?>>
            <font color="red"><?php echo __('Insufficient Funds, Please insert funds into your account, or remove some items.'); ?></font>
        </div>
        <?php
    }
    echo '<a href="/orders/submit/cancel/">' . __('Cancel') . '</a>';
    ?>
</div>