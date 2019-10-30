<div class="nav-top">
    <div class="container-fluid">

        <!--Notice & Search Row-->
        <div class="row">
            <div class="col vertical-align">
                <!--Cartridge Notice-->
                <div class="cartridge-notice">
                    <p class="vertical-align">
                        <span style="">*</span>
                        <span style="">super 8<br>cartridge</span>
                    </p>
                </div>
            </div>
            <div class="col vertical-align">
                <!-- Search -->
                <div class="col vertical-align horizontal-align">
                    <div class="input-group search">
                        <form id="search-form" name="search-form" action="search" method="get">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="la la-search"></i></span>
                            </div>
                            <input name="query" id="query" value type="text" class="form-control" placeholder="<?php echo $searchPlaceholderText; ?>" aria-label="Search" aria-describedby="basic-addon1">
                            <button name="submit_search" id="submit_search" type="submit" value="Search"><?php echo $searchButtonText; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Row-->
        <div class="row">
            <div class="col banner-bg vertical-align horizontal-align">
                <h1 class="nav-brand">
                    <a href="/">
                        <img src="<?php echo src('logo.png', 'images/'); ?>" class="logo" alt="Super 8 Festivals">
                    </a>
                </h1>
            </div>
        </div>

        <!--Links Row-->
        <div class="row">
            <div class="col links vertical-align horizontal-align">
                <?php echo public_nav_main(); ?>
            </div>
        </div>

    </div>
</div>
