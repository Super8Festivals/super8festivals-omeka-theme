<?php echo head(array(
    'title' => 'Home'
)); ?>


<?php
$records = get_records('SuperEightFestivalsCountry', array(), -1);

echo $this->partial("_partials/open-layers-map.php", array(
    'records' => $records,
    'mapID' => 'map',
));
?>


<div style="position: absolute; z-index: 9999; left: 0; bottom: 0; color: red;">
</div>

<?php echo foot(); ?>
