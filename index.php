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

<?php echo foot(); ?>
