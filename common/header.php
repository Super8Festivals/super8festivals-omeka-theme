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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono&display=swap"/>

    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <?php
    // our stylesheet
    queue_css_file('style');

    echo head_css();
    ?>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171539232-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());
        gtag("config", "UA-171539232-1");
    </script>
</head>

<header>
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>
    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>

    <!--Page Header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!--Branding-->
                <div class="row pt-2 pb-2">
                    <div class="col d-flex justify-content-center align-items-center">
                        <h1 class="brand">
                            <a href="/">
                                <img src="<?php echo src('logo.png', 'images'); ?>" class="img-fluid" alt="Super8Festivals" width="600">
                            </a>
                        </h1>
                    </div>
                </div>

                <!--Navigation-->
                <div class="row">
                    <div class="col">
                        <!--Search Box-->
                        <form class="form-group mb-4" id="search-form" name="search-form" action="/search" method="get">
                            <div class="input-group">
                                <label class="input-group-text" for="query">
                                    <i class="bi bi-search"></i>
                                    &nbsp;Search
                                </label>
                                <input type="text" class="form-control" placeholder="Search by year, title, description, or name." name="query" id="query">

                                <select class="form-select" style="max-width: 150px;" name="type">
                                    <option value="city">City</option>
                                    <option value="festival">Festival</option>
                                    <option value="poster">Poster</option>
                                    <option value="photo">Photo</option>
                                    <option value="print-media">Print Media</option>
                                    <option value="film">Film</option>
                                    <option value="filmmaker">Filmmaker</option>
                                    <option value="film-catalogs">Film Catalogs</option>
                                </select>
                                <button id="submit_search" type="submit" class="btn btn-outline-secondary">Search</button>
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

<main>
    <!--Make sure plugin is installed-->
    <?php if (!plugin_is_active("SuperEightFestivals")): ?>
        <div style='position: absolute; top: 41px; z-index; 999; width: 100%; font-size: 1.5em; font-weight: bold; color: red; background-color: #FFFF00AA; display: flex; justify-content: center;'>
            <p class='mb-0'>WARNING: The Super8Festivals plugin is not enabled/installed!</p>
        </div>
    <?php endif; ?>

    <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>
