<?php //debug($image);?>
<img src="/img/test-error-icon.png" width="1" height="13">
<table cellspacing="3" cellpadding="0" border="0">
<?php $i=0;
//debug($image);
foreach ($image as $images) {

   //if($i%4==0) echo "<tr><td>&nbsp;</td>" ?>

<td>
    <a href="/<?php echo $images; ?>"/>
    <img src="/<? echo $images; ?>">
    </a></td>
    <?php // if($i%4 <> 3) echo "<td></td>"; ?>
<?php
    $i++; //echo $i%4;
    if($i%4==0) echo '</tr>';

} ?>
</table>