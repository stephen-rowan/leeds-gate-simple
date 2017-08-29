<?php echo head(array('bodyid'=>'home')); ?>


<div id="home-page-text">
<?php if (get_theme_option('Homepage Text')): ?>
<?php echo get_theme_option('Homepage Text'); ?>
<?php endif; ?>
</div>


<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-item">
    <h3><?php echo __('Featured Item'); ?></h3>
    <?php echo random_featured_items(1); ?>
</div><!--end featured-item-->
<?php endif; ?>

<?php //fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
    <!-- Featured Collection -->
    <div id="featured-collection">
	<h3><?php echo __('Featured Collection'); ?></h3>
	<?php echo random_featured_collection(); ?>
    </div><!-- end featured collection -->
<?php endif; ?>

<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
          && plugin_is_active('ExhibitBuilder')
          && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <div id="featured-exhibit">
    <h3><?php echo exhibit_builder_display_random_featured_exhibit(); ?></h3>
<?php endif; ?>
    </div>

<?php echo foot(); ?>





