<?php
echo head(array(
    'title' => 'Home'
));
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>

<section class="container-fluid" id="home-section">

    <!--2 Col Body-->
    <div class="row no-gutters">
        <!--Side Navigation-->
        <div class="col-lg-4 pl-2 pr-2 d-flex flex-column">
            <a href="federation">
                <img src="<?php echo src('FederationLogoFull.png', 'images/'); ?>" class="img-fluid" alt="Federation">
            </a>
            <h2 class="mt-3 text-center">
                Federation
            </h2>
            <ul class="nav flex-column text-center">
                <li class="nav-item"><a class="nav-link" href="history">History</a></li>
                <li class="nav-item"><a class="nav-link" href="filmmakers">Filmmakers</a></li>
                <li class="nav-item"><a class="nav-link" href="countries">Countries</a></li>
            </ul>
        </div>
        <!--World Map-->
        <div class="col-lg-8 d-flex justify-content-center align-items-center flex-column" style="height: 70vh;">
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
            <div id="popup" class="ol-popup d-flex align-items-center">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content" class="text-capitalize"></div>
            </div>
            <div id="map" class="w-100 h-100 m-auto">
                <?php if ($isPluginActive): ?>
                    <?= $this->partial("_partials/open-layers-map.php", array('mapID' => "map")); ?>
                    <div id="info-box" class="d-flex justify-content-center align-items-center pt-1 pb-1 text-center">
                        <span>Click a marker to view information about it</span>
                    </div>
                    <div id="link-box" class="d-flex justify-content-center align-items-center pt-1 pb-1 text-center">
                        <a href="countries" class="stretched-link">Click here for a full list of countries</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!--Bottom Navigation-->
    <div class="row">
        <div class="col">
            <ul class="row nav nav-fill">
                <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="submit">Submit</a></li>
            </ul>
        </div>
    </div>

</section>


<?php echo foot(); ?>
