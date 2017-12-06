<?php
$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));
$collectionDesc = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));
?>


<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>


<style>

 /* Style the list */
 ul.breadcrumb {
     font-family: "Cinzel", sans-serif;
     font-weight: bold;
     padding: 10px 16px;
     list-style: none;
     //background-color: transparent;
     background-color: #83B16A;
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
     color: #4d4d4d;
     text-decoration: none;
 }

 /* Add a color on mouse-over */
 ul.breadcrumb li a:hover {
     color:  #8c8c8c;
     text-decoration: underline;
 }

   
  
</style>


<div id ="breadcrumb-collection">


    <ul class="breadcrumb">



	<?php
	$root = WEB_ROOT;
	$collection_name = metadata('collection', array('Leeds-GATE element set', 'GATE Title'));
	$collection_id = metadata('collection', 'id');
	$collection_link_address = $root."/collections/browse/";
	echo "<li><a href=\"$root\">Home</a></li>";
	echo "<li><a href=\"$collection_link_address\">Our Collections</a></li>";
	?>

	
	<?php $xyz = get_db()->getTable('CollectionTree')->getAncestorTree($collection_id);?>
	<?php
	echo "<li>";
	echo $this->collectionTreeList($xyz);
	echo "</li>";
	?>

	<?php 


	
	echo "<li>$collection_name</li>";
	?>

    </ul>

    
    
</div>



<!-- <aside id="collection_sidebar"> -->

<div class = "flex-container-collection-show-header">
    <!-- Collection image -->
    <!-- <div id="collection-logo"> -->
    <!-- <center> -->

    <div class="flex-collection-show-header-item-1">
	<?php
	$linkid = metadata('collection', 'id');
	$linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Reference code'));
	$alttext = metadata('collection', array('Leeds-GATE element set', 'GATE Title'));
	$root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.jpg';
	//echo "<a href=\"$linkid\"><img src=\"$root\"  /></a>";
	//echo "<a href=\"$linkid\"><img src=\"$root\" alt=\"$alttext\" title=\"$alttext\"  /></a>";
	echo "<a href=\"$linkid\"><img src=\"$root\" title=\"$alttext\" /></a>";

	?>
    </div>
    
    <div class="flex-collection-show-header-item-2">
	<h3>About <?php echo $alttext; ?> ...</h3>
	
	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Description'))): ?> 
	    <?php //echo metadata('collection', array('Leeds-GATE element set', 'GATE Description')); ?>
	    <?php $summary = metadata('collection', array('Leeds-GATE element set', 'GATE Description'));
	    echo substr($summary, 0,800);
	    echo " ... ";
	    ?>	    
	<?php endif; ?>


	
	<p>For full details about this collection, click <b><a href="#details">here</a></b>.</p>
    </div>


    

</div>
<!--     </center> -->


<!--  	</div> -->



<ul class="flex-container">


    <!-- Call to Leeds_GATE_get_child_collections_images() function : retrieves images for sub collections -->
    <!-- See this themes Custom.php for details-->
    
    <?php 

    //$collectionId = metadata('collection', 'id'); 
    Leeds_GATE_get_child_collections_images($collection_id); 

    ?>
    
</ul>

<div>

    <ul class="flex-container">
	
	<!-- Returns items for collection if they exist -->
	<!-- Note : if the CollectionTree plugin is set to show sub-collection items - top-level collection will display all items here. -->

	<?php if (metadata('collection', 'total_items') > 0): ?>
	
        <?php foreach (loop('items') as $item): ?>
	    
	    <li class="item record">
		<!-- <li class="flex-item"> -->
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
    </div>

<div class = "flex-container-collection-show-footer">

    <!-- Set back to current collection -->
    
    <?php set_current_record('collection', get_record_by_id('collection', $collection_id)); ?>
    
    <!-- Collection metadata -->
    
    <h4><a id="details">Collection Details</a></h4>

    <p>
	<!-- 1) GATE Reference Code -->
	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Reference code'))): ?> 
	    <br><br><b>Reference code:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Reference code')); ?>
	<?php endif; ?>

	<!-- 2) GATE Title -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Title'))): ?> 
	    <br><br><b>Title:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Title')); ?>
	<?php endif; ?>

	<!-- 3) GATE Name of Creator -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Name of Creator'))): ?> 
	    <br><br><b>Name of Creator:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Name of Creator')); ?>
	<?php endif; ?>


	<!-- 4) GATE Dates of Creation -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Dates of Creation'))): ?>
	    <br><br><b>Dates of Creation:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Dates of Creation')); ?>
	<?php endif; ?>


	<!-- 5) GATE Level of description -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Level of description'))): ?>
	    <br><br><b>Level of description:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Level of description')); ?>
	<?php endif; ?>


	<!-- 6) GATE Collection -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Collection'))): ?>
	    <br><br><b>Collection:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Collection')); ?>
	<?php endif; ?>

	
	<!-- 7) GATE Sub-collection -->

	<?php if (metadata('collection', array('Leeds-GATE element set','GATE Sub-collection'))): ?>
	    <br><br><b>Sub-collection:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Sub-collection')); ?>
	<?php endif; ?>


	<!-- 8) GATE Extent and medium of the unit of description -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Extent and medium of the unit of description'))): ?>
		<br><br><b>Extent of the unit of description:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Extent and medium of the unit of description')); ?>
	    <?php endif; ?>

	    <!-- 9) GATE Physical characteristics and technical requirements -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Physical characteristics and technical requirements'))): ?> 
		<br><br><b>Physical characteristics and technical requirements:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Physical characteristics and technical requirements')); ?>
	    <?php endif; ?>

	    <!-- 10) GATE Conditions governing access -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Conditions governing access'))): ?> 
		<br><br><b>Conditions governing access:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Conditions governing access')); ?>
	    <?php endif; ?>

	    <!-- 11) GATE Conditions governing reproduction -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Conditions governing reproduction'))): ?> 
		<br><br><b>Conditions governing reproduction:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Conditions governing reproduction')); ?>
	    <?php endif; ?>


	    <!-- 12) GATE Language of material -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Language of material'))): ?> 
		<br><br><br><b>Language of material:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Language of material')); ?>
	    <?php endif; ?>


	    <!-- 13) GATE Description -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Description'))): ?> 
		<br><br><b>Description:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Description')); ?>
	    <?php endif; ?>


	    <!-- 14) GATE Date(s) of description -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Date(s) of description'))): ?> 
		<br><br><b>Date(s) of description:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Date(s) of description')); ?>
	    <?php endif; ?>


	    <!-- 15) GATE Geographical area -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Geographical area'))): ?> 
		<br><br><b>Geographical area:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Geographical area')); ?>
	    <?php endif; ?>

	    <!-- 16) GATE Immediate source of acquisition or transfer -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Immediate source of acquisition or transfer'))): ?> 
		<br><br><b>Immediate source of acquisition or transfer:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Immediate source of acquisition or transfer')); ?>
	    <?php endif; ?>


	    <!-- 17) GATE Current location -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Current location'))): ?> 
		<br><br><b>Current location:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Current location')); ?>
	    <?php endif; ?>


	    <!-- 18) GATE Related units of description -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Related units of description'))): ?> 
		<br><br><b>Related units of description:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Related units of description')); ?>
	    <?php endif; ?>


	    <!-- 19) GATE Archival history -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Archival history'))): ?> 
		<br><br><b>Archival history:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Archival history')); ?>
	    <?php endif; ?>


	    <!-- 20) GATE Archivists note -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Archivists note'))): ?> 
		<br><br><b>Archivists note:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Archivists note')); ?>
	    <?php endif; ?>

	    <p>

	    <!-- 21) GATE Families -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Families'))): ?> 
		<br><br><b>Families:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Families')); ?>
	    <?php endif; ?>

	    <!-- 22) GATE Gypsy & Traveller voices -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Gypsy & Traveller voices'))): ?> 
		<br><br><b>Gypsy & Traveller voices:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Gypsy & Traveller voices')); ?>
	    <?php endif; ?>

	    <!-- 23) GATE Contentions -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Contentions'))): ?> 
		<br><br><b>Contentions:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Contentions')); ?>
	    <?php endif; ?>


	    <!-- 24) GATE System of arrangement -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE System of arrangement'))): ?> 
		<br><br><b>System of arrangement:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE System of arrangement')); ?>
	    <?php endif; ?>

	    <!-- 25) GATE Biographical history -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Biographical history'))): ?> 
		<br><br><b>Biographical history:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Biographical history')); ?>
	    <?php endif; ?>

	    <!-- 26) GATE Existence and location of originals -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Existence and location of originals'))): ?> 
		<br><br><b>Existence and location of originals:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Existence and location of originals')); ?>
	    <?php endif; ?>

	    <!-- 27) GATE Existence and location of copies -->

	    <?php if (metadata('collection', array('Leeds-GATE element set','GATE Existence and location of copies'))): ?> 
		<br><br><b>Existence and location of copies:</b> <?php echo metadata('collection', array('Leeds-GATE element set', 'GATE Existence and location of copies')); ?>
	    <?php endif; ?>
	</p>
    
	
    </div>



<?php echo foot(); ?>
