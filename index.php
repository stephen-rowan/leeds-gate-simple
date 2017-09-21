<?php echo head(array('bodyid'=>'home')); ?>


<div id="home-page-text">
    <?php if (get_theme_option('Homepage Text')): ?>
	<?php echo get_theme_option('Homepage Text'); ?>
    <?php endif; ?>
</div>


<?php //fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<!-- Featured Collection -->


<div id="featured-collection">
    <h3><?php echo __('Featured Collection'); ?></h3>

    <?php 
    if (get_theme_option('Display Featured Collection') !== '0' 
	&& $featuredCollections = get_records('Collection', array('featured' => 1, 'sort_field' => 'random'),1)
    ):
    foreach ($featuredCollections as $collection): 

    ?>
	
	<?php
	$title = metadata($collection, array('Leeds-GATE element set', 'GATE Title'), array('snippet' => 150));
	$description = metadata($collection, array('Leeds-GATE element set', 'GATE Description'), array('snippet' => 150));
	?>
	
	<h3><?php
	    
	    $collectionId = metadata($collection, 'id');

	    $collectionlink = WEB_ROOT.'/collections/show/'.$collectionId;;

	    echo "<a href=\"$collectionlink\">$title</a>";
	    
	    ?>

	</h3>
	
	<?php //if ($collectionImage = record_image($collection)): ?>

	<?php //echo link_to($this->collection, 'show', $collectionImage, array('class' => 'image')); ?>

	<?php //endif; ?>

	<?php if ($description): ?>
	    <p class="collection-description"><?php echo $description; ?></p>
	<?php endif; ?>

    <?php 
    
    release_object($collection);

    endforeach;
    else: 
    echo '<p>' . __('No featured collections are available.') . '</p>';
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

       
?>

    <?php

    $itemtitle = metadata($item, array('Leeds-GATE element set', 'GATE Title'), array('snippet' => 150));
    $itemdescription = metadata($item, array('Leeds-GATE element set', 'GATE Description'), array('snippet' => 150));
		  ?>
    
    <h3><?php
    
    $itemId = metadata($item, 'id');

    $itemlink = WEB_ROOT.'/items/show/'.$itemId;;

    echo "<a href=\"$itemlink\">$itemtitle</a>";
    
	?>

    </h3>

<?php if ($itemdescription): ?>
	    <p class="collection-description"><?php echo $itemdescription; ?></p>
	<?php endif; ?>
        

    <?php 

    
    release_object($item);
    endforeach;
    else: 
	 echo '<p>' . __('No featured items are available.') . '</p>';
    endif; 
    ?>
</div>


<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
          && plugin_is_active('ExhibitBuilder')
          && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->

    <div id="featured-exhibit">
	<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>
    </div>

    


    <?php echo foot(); ?>





