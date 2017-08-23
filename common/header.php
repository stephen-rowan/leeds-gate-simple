<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>">
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
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_url('//fonts.googleapis.com/css?family=Cinzel:300,400,500,700,300italic,400italic,500italic,700italic');
    queue_css_url('//fonts.googleapis.com/css?family=Cantarell:300,400,500,700,300italic,400italic,500italic,700italic');
    queue_css_file(array('iconfonts', 'normalize', 'style','new-style'), 'screen');
    queue_css_file(array('iconfonts', 'normalize', 'style','unslider'), 'screen');
    queue_css_file(array('iconfonts', 'normalize', 'style','unslider-dots'), 'screen');
    queue_css_file('print', 'print');
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js_file(array(
        'vendor/selectivizr',
        'vendor/jquery-accessibleMegaMenu',
        'vendor/respond',
        'jquery-extra-selectors',
        'seasons',
	'new-seasons',
	'unslider',
	'globals'
    )); 
    ?>

    
    <?php echo head_js(); ?>

    <!-- BUG Temporary fix for dynamic re-sizing of logo image - this re-sizes all img elements at present -->
    <!-- Need to find and amend setting in SASS/CSS -->

    <style>
     img {
	 width: 100%;
	 height: auto;
     }
    </style>
    
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

<div id="wrap">

    <div id="header div img"><?php echo link_to_home_page(theme_logo()); ?></div>

 
    
    <nav id="top-nav" class="top" role="navigation">
        <?php echo public_nav_main(); ?>


	    <div id="search-container" role="search">
	      <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
	      <?php echo search_form(array('show_advanced' => true)); ?>
	      <?php else: ?>
	      <?Php echo search_form(); ?>
	      <?php endif; ?>
	    </div>
	    


	</nav>

        <div id="content" role="main" tabindex="-1">
            <?php
                if(! is_current_url(WEB_ROOT)) {
                  fire_plugin_hook('public_content_top', array('view'=>$this));
                }
            ?>

	   
	    
