<!--Main Navigation-->
<nav id="nav-top" class="navbar navbar-expand-lg navbar-dark bg-dark" style="<?= $top ? "top: 0;" : "" ?>">
    <div class="col">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="/">
                    <h1>
                        <img src="<?php echo src('logo.png', 'images/'); ?>" class="logo" alt="Super 8 Festivals">
                    </h1>
                </a>
            </div>
            <div class="col d-flex justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php echo public_nav_main(); ?>
        <div class="input-group search">
            <form class="form-inline" id="search-form" name="search-form" action="search" method="get">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="la la-search"></i></span>
                </div>
                <input name="query" id="query" value type="text" class="form-control d-flex flex-fill" placeholder="Enter search text here..." aria-label="Search" aria-describedby="basic-addon1">
                <button name="submit_search" id="submit_search" type="submit" value="Search" class="d-flex justify-content-end">Search</button>
            </form>
        </div>
    </div>
</nav>