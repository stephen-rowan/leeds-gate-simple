<?php echo head(array('bodyid'=>'home')); ?>


<?php if (get_theme_option('Display Featured Item') !== '0'): ?>

<!-- Featured Item -->
<div id="featured-item">
<p>

<?php if (get_theme_option('Homepage Text')): ?>
<?php echo get_theme_option('Homepage Text'); ?>
<?php endif; ?>
</p>

</div><!--end featured-item-->
<?php endif; ?>



<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<!-- Browse our collections -->
<div id="featured-collection">
    <h2>Browse our collections</h2>
   
</div><!-- end Browse our collections -->


<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-collection">
    <h2><?php echo __('Featured items'); ?></h2>
   <center><?php echo random_featured_items(2); ?></center>
   
</div><!--end featured-item-->
<?php endif; ?>


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
<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>


<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
