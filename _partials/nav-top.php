<div class="nav-top">
    <div class="container headers">
        <!-- Row 1 -->
        <div class="row">
            <!-- Title -->
            <div class="col vertical-align horizontal-align">
                <h1 class="nav-brand">
                    <a href="/">
                        <img src="<?php echo src('logo.png', 'images/'); ?>" class="logo" alt="Super 8 Festivals">
                    </a>
                </h1>
            </div>
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
    <div class="container-fluid links">
        <div class="row">
            <div class="col">
                <?php echo public_nav_main(); ?>
            </div>
        </div>
    </div>
</div>