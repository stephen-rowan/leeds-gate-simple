<?php echo head(array('bodyid'=>'home')); ?>


<div id="home-page-text">
    <?php if (get_theme_option('Homepage Text')): ?>
	<?php echo get_theme_option('Homepage Text'); ?>
    <?php endif; ?>
</div>


<?php //fire_plugin_hook('public_content_top', array('view'=>$this)); ?>


<!-- Featured Collection <div id="featured-collection"> -->



    <div id="home-featured-collection"> <!-- style="background-color: #83B16A"> -->
    

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


	<h3><?php echo __('Featured Collection'); ?></h3>

	<!-- 	<br> -->
	
	<h3><?php
	    
	    $collectionId = metadata($collection, 'id');

	    $collectionlink = WEB_ROOT.'/collections/show/'.$collectionId;;

	    echo "<a href=\"$collectionlink\">$title</a>";
	    
	    ?>

	</h3>

	<!-- 	<br> -->
	

	<!-- Collection Image  -->
	<!--	<div class = "collectionfile"> -->
	<div class="item record">	
	    <?php
	    $xlinkid = metadata($collection, 'id');
	    $xlinktext = metadata($collection, array('Leeds-GATE element set', 'GATE Reference code'));
	    $xroot = WEB_ROOT.'/themes/simple/images/'.$xlinktext.'.png';
	    echo "<a href=\collections/show/$xlinkid><img src=\"$xroot\"  /></a>";
	    ?>

	</div>

	    <!--	</div> -->


	    <!-- Collection Image  -->


	    

	    <?php //if ($description): ?>
	    <?php //echo $description; ?>
	    <?php //endif; ?>

    <?php 
    
    release_object($collection);

    endforeach;
    else: 
    echo '<p>' . __('No featured collections are available.') . '</p>';
    endif; 
    ?>

	</div>


	<div id="home-featured-item">

	    <!-- Required by theme settings ... -->
	    <?php random_featured_items(1); ?>
	    <!-- Required by theme settings ... -->
	    
	    
	    <!-- https://forum.omeka.org/t/how-to-show-multiple-featured-collections/4332 -->
	    <?php 
	    if (get_theme_option('Display Featured Item') !== '0' 
		&& $featuredItems = get_records('item', array('featured' => 1, 'sort_field' => 'random'), 1)
	    ):
	    foreach ($featuredItems as $item):

	    
	    ?>


		<h3><?php echo __('Featured Item'); ?></h3>

		
		<!-- <br>  -->

		<?php

		$itemtitle = metadata($item, array('Leeds-GATE element set', 'GATE Title'), array('snippet' => 150));
		$itemdescription = metadata($item, array('Leeds-GATE element set', 'GATE Description'), array('snippet' => 150));
		$itemId = metadata($item, 'id');
		$itemlink = WEB_ROOT.'/items/show/'.$itemId;;
		
		$itemfile = $item->getFile();
		$itemuri = $itemfile->getWebPath('fullsize');
		?>
		
		<!-- Item image -->

		
		<!--	<div class = "itemfile"> -->


		<div class="item record">	

		<?php echo "<a href=".$itemlink; ?>>
	<?php echo "<img src="; ?>
	<?php echo $itemuri ; ?>
	<?php echo "></a>"; ?>
	
	</div>
	<!-- Item image -->
	
	

	<?php if ($itemdescription): ?>
	    
	    <?php //echo $itemdescription; ?>
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

    <!-- <div id="featured-exhibit">  -->
<div id="home-featured-exhibit">
	<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>
</div>
<!-- - </div>  -->

    


    <?php echo foot(); ?>





