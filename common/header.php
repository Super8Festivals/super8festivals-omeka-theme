<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if ($description = option('description')): ?>
        <meta name="description" content="<?php echo $description; ?>"/>
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
    <?php
    // -- START BOOTSTRAP --
    queue_css_url('//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    // -- END BOOTSTRAP --

    // -- START GOOGLE FONTS --
    queue_css_url('https://fonts.googleapis.com/css?family=Archivo+Black|Roboto|Roboto+Mono&display=swap');
    // -- END GOOGLE FONTS --

    // line awesome provides our icons
    queue_css_file(array('line-awesome.min', 'line-awesome-font-awesome.min'));

    // -- START OPEN LAYERS MAP --
    queue_css_url('//cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css');
    // -- END OPEN LAYERS MAP --

    // our stylesheet
    queue_css_file('style');

    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
    // -- START BOOTSTRAP --
    queue_js_url("https://code.jquery.com/jquery-3.3.1.slim.min.js");
    queue_js_url("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js");
    queue_js_url("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");
    // -- END BOOTSTRAP --
    // jQuery
    queue_js_url("https://code.jquery.com/jquery-3.4.1.min.js");
    echo head_js();
    ?>


    <!-- Google Analytics -->
    <?php if (!is_localhost()): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171539232-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-171539232-1');
        </script>
    <?php endif; ?>

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<?php fire_plugin_hook('public_body', array('view' => $this)); ?>

<header role="banner">
    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>

    <!--Page Header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!--Branding-->
                <div class="row pt-2 pb-2">
                    <div class="col d-flex justify-content-center align-items-center">
                        <h2 class="brand">
                            <a href="/">
                                <img src="<?php echo src('logo.png', 'images'); ?>" class="img-fluid"
                                     alt="Super8Festivals" width="600">
                            </a>
                        </h2>
                    </div>
                </div>

                <!--Navigation-->
                <div class="row">
                    <div class="col">
                        <!--Search Box-->
                        <form class="form-group" id="search-form" name="search-form" action="/search" method="get">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="query">
                                        <i class="la la-search"></i>
                                    </label>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="query" id="query">
                                <div class="input-group-append">
                                    <button id="submit_search" type="submit" class="d-flex justify-content-end btn btn-outline-secondary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs-->
        <div class="row">
            <div class="col">
                <?= $this->partial('_partials/breadcrumbs.php'); ?>
            </div>
        </div>
    </div>

</header>

<!--Make sure plugin is installed-->
<?php if (!plugin_is_active("SuperEightFestivals")): ?>
    <div style='position: absolute; top: 41px; z-index; 999; width: 100%; font-size: 1.5em; font-weight: bold; color: red; background-color: #FFFF00AA; display: flex; justify-content: center;'>
        <p class='mb-0'>WARNING: The Super8Festivals plugin is not enabled/installed!</p>
    </div>
<?php endif; ?>

<main>
    <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>
