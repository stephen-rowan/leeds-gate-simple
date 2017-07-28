<?php echo head(array('bodyid'=>'home')); ?>

<?php if (get_theme_option('Homepage Text')): ?>
<p><?php echo get_theme_option('Homepage Text'); ?></p>
<?php endif; ?>

<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-item">

<p>A short bit of “Leeds GATE Archives is...” text goes here,
so that people know at first glance what the site is I don’t think there ought to
be any kind of border around it - it’s just a column with text in it.
But if there’s any problems with it showing up against the background, 
we might have to rethink, or remove the background.</p>


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
    <h2><?php echo __('Featured item'); ?></h2>
    <?php echo random_featured_items(1); ?>
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
