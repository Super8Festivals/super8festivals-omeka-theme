<?php
echo head(array(
    'title' => 'Home'
));
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>
<style>
    .ol-popup {
        position: absolute;
        background-color: white;
        filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #cccccc;
        bottom: 12px;
        left: -50px;
        min-width: 300px;
    }

    .ol-popup:after, .ol-popup:before {
        top: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .ol-popup:after {
        border-top-color: white;
        border-width: 10px;
        left: 48px;
        margin-left: -10px;
    }

    .ol-popup:before {
        border-top-color: #cccccc;
        border-width: 11px;
        left: 48px;
        margin-left: -11px;
    }

    .ol-popup-closer {
        text-decoration: none;
        position: absolute;
        top: 2px;
        right: 8px;
    }

    .ol-popup-closer:after {
        content: "✖";
    }
</style>

<section class="container-fluid mb-5">
    <div class="row">
        <div class="col-lg-4">
            <img src="<?php echo src('FederationLogoFull.png', 'images'); ?>" class="img-fluid mb-2" alt="Federation">
            <ul class="nav flex-column text-center">
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/federation">Federation</a></li>
                <li class="nav-item"><a class="nav-link" href="/federation#history">History</a></li>
                <li class="nav-item"><a class="nav-link" href="/filmmakers">Filmmakers</a></li>
                <li class="nav-item"><a class="nav-link" href="/cities">Cities</a></li>
            </ul>
        </div>
        <div class="col-lg-8 col-md d-none d-md-block" style="height: 70vh;">
            <div id="popup" class="ol-popup d-flex align-items-center">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content" class="text-capitalize"></div>
            </div>
            <div id="map" class="w-100 h-100 m-auto">
                <?php if ($isPluginActive): ?>
                    <?= $this->partial("_partials/open-layers-map.php", array('mapID' => "map")); ?>
                <?php endif; ?>
            </div>
            <p class="mb-5 bg-dark text-light text-center">The markers on the map above represent notable cities in which Super 8 Festivals were held. Click on a marker to view more information.</p>
        </div>
    </div>
</section>

<?php echo foot(); ?>
