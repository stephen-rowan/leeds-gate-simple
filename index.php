<?php echo head(array('bodyid'=>'home')); ?>


<div id="home-page-text">
    <?php if (get_theme_option('Homepage Text')): ?>
	<?php echo get_theme_option('Homepage Text'); ?>
    <?php endif; ?>
</div>


<?php //fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<!-- Featured Item -->


<div id="featured-item">

    <!-- Required by theme settings ... -->
    <?php random_featured_items(1); ?>
    <!-- Required by theme settings ... -->
    
    <h3><?php echo __('Featured Item'); ?></h3>
    <!-- https://forum.omeka.org/t/how-to-show-multiple-featured-collections/4332 -->
    <?php 
    if (get_theme_option('Display Featured Item') !== '0' 
	&& $featuredItems = get_records('item', array('featured' => 1, 'sort_field' => 'random'), 1)
    ):
    foreach ($featuredItems as $item): 
    //echo metadata('item', array('Leeds-GATE element set', 'GATE Reference code'));
    echo $this->partial('items/single.php', array('item' => $item));
    release_object($item);
    endforeach;
    else: 
	 echo '<p>' . __('No featured items are available.') . '</p>';
    endif; 
    ?>
</div>

<div id="featured-item">

    <!-- Required by theme settings ... -->
    <?php random_featured_items(1); ?>
    <!-- Required by theme settings ... -->
    
    <h3><?php echo __('Featured Item'); ?></h3>
    <!-- https://forum.omeka.org/t/how-to-show-multiple-featured-collections/4332 -->
    <?php 
    if (get_theme_option('Display Featured Item') !== '0' 
	&& $featuredItems = get_records('item', array('featured' => 1, 'sort_field' => 'random'), 1)
    ):
    foreach ($featuredItems as $item): 
    echo $this->partial('items/single.php', array('item' => $item));
    release_object($item);
    endforeach;
    else: 
	 echo '<p>' . __('No featured items are available.') . '</p>';
    endif; 
    ?>
</div>


<div id="featured-collection">
    <h3><?php echo __('Featured Collection'); ?></h3>
    <!-- https://forum.omeka.org/t/how-to-show-multiple-featured-collections/4332 -->
    <?php 
    if (get_theme_option('Display Featured Collection') !== '0' 
	&& $featuredCollections = get_records('Collection', array('featured' => 1, 'sort_field' => 'random'),1)
    ):
    foreach ($featuredCollections as $collection): 
    echo $this->partial('collections/single.php', array('collection' => $collection));
    release_object($collection);
    endforeach;
    else: 
	 echo '<p>' . __('No featured collections are available.') . '</p>';
    endif; 
    ?>
</div>







<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
          && plugin_is_active('ExhibitBuilder')
          && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->

    <div id="featured-exhibit">
	<h3><?php //echo exhibit_builder_display_random_featured_exhibit(); ?></h3>
<?php endif; ?>
    </div>

    <div id="featured-collection">
	<h3><?php echo __('Recently updated items'); ?></h3>
	<?php
	$num = 3;
	$updatedItems = get_db()->getTable('Item')->findBy(array('sort_field' => 'modified', 'sort_dir' => 'd'), $num);
	$html = '';
	$view = get_view();
	foreach ($updatedItems as $updatedItem) {
	    $html .= $view->partial('items/single.php', array('item' => $updatedItem));
	    release_object($updatedItem);
	}
	echo $html;
	?>
    </div>



    <?php if (get_theme_option('Display Featured Collection') !== '0'): ?>

	<!-- Featured Collection -->
	<div id="featured-collection">

	    <h3><?php echo __('All Collections'); ?></h3>
	    <?php
	    $collections = get_records('Collection');

	    foreach ($collections as $collection) {
		echo get_view()->partial('collections/single.php', array('collection' => $collection));
	    }
	    $html = get_view()->partial("collections/single.php", array("collection" => $collection));
	    echo $html;
	    ?>
	    
	</div><!-- end featured collection -->

    <?php endif; ?>
    

<?php echo foot(); ?>





