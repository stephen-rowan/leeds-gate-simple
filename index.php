<?php echo head(array('bodyid'=>'home')); ?>


<div id="home-page-text">
<?php if (get_theme_option('Homepage Text')): ?>
<p><?php echo get_theme_option('Homepage Text'); ?></p>
<?php endif; ?>
</div>

<!-- Browse our collections -->
<div id="browse-our-collections">
    <h2>Browse our collections</h2>

</div><!-- end Browse our collections -->


<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-item">
    <h2><?php echo __('Featured Item'); ?></h2>
    <?php echo random_featured_items(1); ?>
</div><!--end featured-item-->
<?php endif; ?>

<?php //fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
<!-- Featured Collection -->
<div id="featured-collection">
    <h2><?php echo __('Featured Collection'); ?></h2>
    <?php echo random_featured_collection(); ?>
</div><!-- end featured collection -->
<?php endif; ?>

<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
        && plugin_is_active('ExhibitBuilder')
        && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
<!-- Featured Exhibit -->
<div id="featured-exhibit">
<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>
</div>

<?php echo foot(); ?>
