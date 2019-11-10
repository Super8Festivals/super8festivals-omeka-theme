<!--Main Navigation-->
<div class="container-fluid simple-nav-top <?php echo $sticky ? 'sticky' : "" ?>">
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
