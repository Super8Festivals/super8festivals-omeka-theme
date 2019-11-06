<?php echo head(array(
    'title' => 'Home'
)); ?>

<?php
$mapID = "map";
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>



<?php if (!$isPluginActive): ?>


<?php else: ?>
    <div class="map-area">
        <div class="row">
            <div class="col-sm-2 horizontal-align vertical-align">
                <div class="map-sidebar">
                    <ul>
                        <li>
                            <a href="/countries">
                                <div class="cartridge-box">
                                    <span class="box-title">Countries</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/filmmakers">
                                <div class="cartridge-box">
                                    <span class="box-title">Filmmakers</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div id="<?php echo $mapID; ?>" class="map">
                </div>
            </div>
        </div>
    </div>

    <?php
    $records = get_records('SuperEightFestivalsCountry', array(), -1);

    echo $this->partial("_partials/open-layers-map.php", array(
        'records' => $records,
        'mapID' => $mapID,
    ));
    ?>

<?php endif; ?>

<?php echo foot(); ?>
