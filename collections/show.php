<?php
$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));
$collectionDesc = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));
?>


<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>



<aside id="sidebar">

    <!-- Collection image -->
    
    <div>
	<center>
	    <?php
	    $linkid = metadata('collection', 'id');
	    $linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Reference code'));
	    $root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.png';
	    echo "<a href=\"$linkid\"><img src=\"$root\"  /></a>";
	    ?>	
	</center>

    </div>

    <div>
	
	<!-- Collection metadata details -->
	
	<?php

	if (metadata('collection', array('Leeds-GATE element set','GATE Description'))): ?>
	    <p><b>Description :</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Description')); ?></p>
	<?php endif; ?>
	

	<?php

	if (metadata('collection', array('Leeds-GATE element set','GATE Immediate source of acquisition or transfer'))): ?> 
	    <p><b>Immediate source of acquisition or transfer :</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Immediate source of acquisition or transfer')); ?></p>
	<?php endif; ?>

	<?php

	if (metadata('collection', array('Leeds-GATE element set','GATE Current location'))): ?> 
	    <p><b>Current location :</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Current location')); ?></p>
	<?php endif; ?>


	<!-- CollectionTree data -->

	<?php
	$collectionId = metadata('collection', 'id');
	$collectionTree = get_db()->getTable('CollectionTree')->getCollectionTree($collectionId);
	echo $this->CollectionTreeList($collectionTree);
	?>

	<!-- Leeds_GATE_get_child_collections() function -->
	
	<?php

	# BUG : This function conflicts with Leeds_GATE_get_child_collections_images
	
	#$collectionId = metadata('collection', 'id');
	#Leeds_GATE_get_child_collections($collectionId); 
	?>
	
    </div>
    
</aside>

<ul class="flex-container">


    <!-- Call to Leeds_GATE_get_child_collections_images() function : retrieves images for sub collections -->
    <!-- See this themes Custom.php for details-->
    
    <?php 

    $collectionId = metadata('collection', 'id'); 
    Leeds_GATE_get_child_collections_images($collectionId); 

    ?>
    
</ul>


<ul class="flex-container">
    
    <!-- Returns items for collection if they exist -->
    <!-- Note : if the CollectionTree plugin is set to show sub-collection items - top-level collection will display all items here. -->
    
    <?php if (metadata('collection', 'total_items') > 0): ?>
	
	
        <?php foreach (loop('items') as $item): ?>
            
            <li class="item record">
     		<?php $itemTitle = strip_formatting(metadata('item', array('Leeds-GATE element set', 'GATE Title'))); ?>
		
	 	<?php if (metadata('item', 'has thumbnail')): ?>
		    
		    <div class="img">
			<?php echo link_to_item(item_image('fullsize', array('alt' => $itemTitle))); ?>
		    </div>
		<?php endif; ?>

	    </li>
            
            
            
        <?php endforeach; ?>
    <?php else: ?>
        <p><?php //echo __("There are currently no items within this collection."); ?></p>
    <?php endif; ?>
    
    
    
    
</ul>



<?php echo foot(); ?>
