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

    // line awesome provides our icons
    queue_css_file('line-awesome.min', 'line-awesome-font-awesome.min');

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
<a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
<?php fire_plugin_hook('public_body', array('view' => $this)); ?>

<header role="banner">
    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>
    <?php echo $this->partial('_partials/nav-top.php', array(
        'items' => array(
            // Home
            array(
                'title' => 'Home',
                'href' => '/',
                'active' => true,
            ),
            // About
            array(
                'title' => 'About',
                'href' => '/about',
                'active' => false,
            ),
            // Contact
            array(
                'title' => 'Contact',
                'href' => '/contact',
                'active' => false,
            ),
            // Submit
            array(
                'title' => 'Submit',
                'href' => '/submit',
                'active' => false,
            ),
        )
    )); ?>

</header>

<div id="wrap">
    <div id="content" role="main" tabindex="-1">
        <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>
