<?php
//debug($image);
foreach($image as $images){ ?>
<a href="/<?php echo $images; ?>" />
<img src="/<? echo $images; ?>">
</a>
<?php } ?>
