<?php echo head(array(
    'title' => 'Home'
)); ?>

<?php
$mapID = "map";
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>

<!--Box-->
<section class="super8-box" id="box" next="#world">
    <div class="container-fluid">
        <!--Cartridge Dimensions-->
        <div class="row no-gutters" style="padding: 1em 0;">
            <div class="col">
                <div class="cartridge-dimensions">
                    <span>15 m &bullet; 50 ft</span>
                </div>
            </div>
        </div>

        <!--Cartridge Notice-->
        <div class="row no-gutters" style="padding: 0.5em 0;">
            <div class="col">
                <div class="cartridge-notice">
                    <p>
                        <span style="">*</span>
                        <span style="">super 8<br>cartridge</span>
                    </p>
                </div>
            </div>
        </div>

        <!--Cartridge Banner-->
        <div class="row no-gutters cartridge-banner">
            <div style="margin: auto;">
                <div class="row no-gutters">
                    <div class="col">
                        <p class="title">Kodachrome 40</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col">
                        <p class="subtitle">Color Movie Film</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Cartridge Type-->
        <div class="row no-gutters" style="padding: 0.5em 0;">
            <div class="col">
                <div class="cartridge-type">
                    <span>TYPE A</span>
                </div>
            </div>
        </div>
    </div>


    <!--Main Navigation-->
    <div class="container-fluid simple-nav-top">
        <div class="row no-gutters vertical-align">
            <!--Branding-->
            <div class="col-lg-3">
                <h1 class="nav-brand">
                    <a href="/">
                        <img src="<?php echo src('logo.png', 'images/'); ?>" class="logo" alt="Super 8 Festivals">
                    </a>
                </h1>
            </div>
            <!--Links-->
            <div class="col-lg horizontal-align links">
                <?php echo public_nav_main(); ?>
            </div>
            <!--Search-->
            <div class="col-lg-3 horizontal-align vertical-align">
                <div class="input-group search">
                    <form id="search-form" name="search-form" action="search" method="get">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="la la-search"></i></span>
                        </div>
                        <input name="query" id="query" value type="text" class="form-control" placeholder="Enter search text here..." aria-label="Search" aria-describedby="basic-addon1">
                        <button name="submit_search" id="submit_search" type="submit" value="Search">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<!--World (Map)-->
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
                            <a href="">View Countries List</a>
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

<!--Federation-->
<section class="container-fluid vertical-align" style="background-color: #e2e2e2; height: 100vh; width: 100%;" id="federation" next="#filmmakers" previous="#world">
    <div class="row" style="height: 100%;">

        <!--Image-->
        <div class="col-lg">
            <div class="vertical-align horizontal-align" style="height: 100%;">
                <img src="<?php echo img('FederationLogoFull.png', 'images') ?>" alt="" width="900"/>
            </div>
        </div>

        <!--Info-->
        <div class="col-lg-5">
            <div class="vertical-align" style="height: 100%; ">
                <div class="container-fluid">
                    <!--Header-->
                    <div class="row">
                        <div class="col">
                            <h2>Learn about the Federation</h2>
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
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Filmmakers-->
<section class="container-fluid vertical-align" style="background-color: #f2f2f2; height: 100vh; width: 100%;" id="filmmakers" next="" previous="#federation">
    <div class="row" style="height: 100%;">
        <!--Image-->
        <div class="col-lg">
            <div class="vertical-align horizontal-align" style="height: 100%; transform: scaleX(-1);">
                <img src="<?php echo img('BauerS715.png', 'images') ?>" alt="" width="400"/>
            </div>
        </div>
        <!--Info-->
        <div class="col-lg-4">
            <div class="vertical-align" style="height: 100%; ">
                <div class="container-fluid">
                    <!--Header-->
                    <div class="row">
                        <div class="col">
                            <h2>Meet the Filmmakers</h2>
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
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Image-->
        <div class="col-lg">
            <div class="vertical-align horizontal-align" style="height: 100%;">
                <img src="<?php echo img('bolex680.png', 'images') ?>" alt="" width="400"/>
            </div>
        </div>
    </div>
</section>


<script>
    // back to top of page
    $(document).ready(() => {
        window.scrollTo(0, 0);
        let prevSection = $('section').first().attr('previous');
        let currentSection = "#" + $('section').first().attr('id');
        let nextSection = $('section').first().attr('next');
        // console.log(`Prev: ${prevSection} | Current: ${currentSection} | Next: ${nextSection}`);
        // capture mouse scroll
        $('body').on('mousewheel DOMMouseScroll', function (e) {
            if (typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
                if (e.originalEvent.detail > 0) {
                    onScrollDown();
                } else if (e.originalEvent.detail < 0) {
                    onScrollUp();
                }
            } else if (typeof e.originalEvent.wheelDelta == 'number') {
                if (e.originalEvent.wheelDelta < 0) {
                    onScrollDown();
                } else if (e.originalEvent.wheelDelta > 0) {
                    onScrollUp();
                }
            }
        });
        // capture anchor click
        $('a.previous').click((event) => {
            event.preventDefault();
            const {target} = event;
            if (target === undefined) return;
            const parent = $(target).closest("section");
            if (parent === undefined) return;
            changeSection(parent.attr('previous'));
        });
        $('a.next').click((event) => {
            event.preventDefault();
            const {target} = event;
            if (target === undefined) return;
            const parent = $(target).closest("section");
            if (parent === undefined) return;
            changeSection(parent.attr('next'));
        });
        changeSection = (elemID) => {
            if (elemID === undefined) return;
            scrollIntoView(elemID);
            update(elemID);
        };
        update = (setionElementID) => {
            prevSection = $(setionElementID).attr('previous');
            currentSection = "#" + $(setionElementID).attr('id');
            nextSection = $(setionElementID).attr('next');
        };
        onScrollUp = () => {
            if (prevSection === undefined) return;
            changeSection(prevSection);
        };
        onScrollDown = () => {
            if (nextSection === undefined) return;
            changeSection(nextSection);
        };
        scrollIntoView = (elemID, duration = 10) => {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(elemID).offset().top
            }, duration);
        }
    });
</script>

<?php echo foot(); ?>
