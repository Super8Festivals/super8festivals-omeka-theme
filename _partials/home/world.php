<?php
$mapID = "map";
?>

<section class="container-fluid vertical-align" style="" id="world" next="#federation" previous="#box">
    <div class="row" style="height: 100%;">
        <!--Info-->
        <div class="col-lg-4">
            <div class="vertical-align" style="height: 100%; ">
                <div class="container-fluid">
                    <!--Header-->
                    <div class="row">
                        <div class="col">
                            <h2>Explore Festivals by Country</h2>
                        </div>
                    </div>
                    <!--Description-->
                    <div class="row">
                        <div class="col">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="/countries">View Countries List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Map-->
        <div class="col-lg">
            <div id="<?php echo $mapID; ?>" style="width: 100%; height: 100%; position: absolute; right:0;">
                <?php
                echo $this->partial("_partials/open-layers-map.php", array(
                    'records' => get_records('SuperEightFestivalsCountry', array(), -1),
                    'mapID' => $mapID,
                ));
                ?>
            </div>
        </div>
    </div>
</section>