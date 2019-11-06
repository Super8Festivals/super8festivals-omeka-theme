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
    queue_css_url('https://fonts.googleapis.com/css?family=Playfair+Display|Roboto|Roboto+Mono|Staatliches&display=swap');
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
    echo head_js();
    ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<?php fire_plugin_hook('public_body', array('view' => $this)); ?>

<header role="banner">
    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>
    <?php

    $navItems = array(
        // Home
        array(
            'title' => 'Home',
            'href' => '/',
            'active' => current_url() == '/',
        ),
    );

    if (plugin_is_active(('SimplePages'))) {
        $simplePagesLinks = simple_pages_get_links_for_children_pages(0);
        foreach ($simplePagesLinks as $link) {
            array_push($navItems, array(
                'title' => $link['label'],
                'href' => $link['uri'],
                'active' => current_url() == $link['uri'],
            ));
        }
    }

    echo $this->partial('_partials/nav-top.php', array(
        'searchPlaceholderText' => '',
        'searchButtonText' => 'Search',
        'items' => $navItems,
    )); ?>

</header>

<!--Make sure plugin is installed-->
<div style="position: absolute; bottom: 50%; background: rgba(0,0,0,0.5); z-index: 9999; display: flex; justify-items: center; width: 100%;">
    <?php if (!plugin_is_active("SuperEightFestivals")): ?>
        <p style="font-weight: bold; color: red; font-size: 3em; width: 100%;" class="horizontal-align">The Super8Festivals Plugin must be installed for the theme to work correctly</p>
    <?php endif; ?>
</div>

<main id="wrap" class="container-fluid flex-fill">
    <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>
