<?php
$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));
$collectionDesc = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));
?>


<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>


<style>

 /* Style the list */
 ul.breadcrumb {
     padding: 10px 16px;
     list-style: none;
     background-color: transparent;
 }

 /* Display list items side by side */
 ul.breadcrumb li {
     display: inline;
     font-size: 16px;
 }

 /* Add a slash symbol (/) before/behind each list item */
 ul.breadcrumb li+li:before {
     padding: 8px;
     color: black;
     content: "/\00a0";
 }

 /* Add a color to all links inside the list */
 ul.breadcrumb li a {
     color: #0275d8;
     text-decoration: none;
 }

 /* Add a color on mouse-over */
 ul.breadcrumb li a:hover {
     color: #01447e;
     text-decoration: underline;
 }
 

</style>


<div>
    <ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Collection</a></li>
	<li><a href="#">Collection</a></li>

    </ul>

    
    
</div>



<aside id="sidebar">

    <!-- Collection image -->
    
    <div id="header-logo">
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
