<?php echo head(array('title' => metadata('item', array('Leeds-GATE element set', 'GATE Title')),'bodyclass' => 'items show')); ?>

<style>
 /* Style the list */
 ul.breadcrumb {
     font-family: "Cinzel", sans-serif;
     font-weight: bold;
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
     color: #404040;
     text-decoration: none;
 }
 /* Add a color on mouse-over */
 ul.breadcrumb li a:hover {
     color:  #6a6a6a;
     text-decoration: underline;
 }
 
</style>



<div id ="breadcrumb-item">
    <ul class="breadcrumb">
	<?php
	$root = WEB_ROOT;
	$collection_name = metadata('item', 'Collection Name');
	$collection_id = metadata('item', 'Collection ID');
	$collection_link_address = $root."/collections/show/".$collection_id;
	echo "<li><a href=\"$root\">Home</a></li>";
	?>

	<?php if (metadata('item', 'Collection Name')): ?> 

	    <?php $collection = get_collection_for_item(); if ($collection):?><?php endif; ?>
	    <?php $collectionId = metadata($collection, 'id');?>

	    <?php $xyz = get_db()->getTable('CollectionTree')->getAncestorTree($collectionId);?>
	    <?php
	    echo "<li>";
	    echo $this->collectionTreeList($xyz);
	    echo "</li>";
	    ?>

	<?php endif; ?>

	<?php
	set_current_record('collection', get_record_by_id('collection', $collection_id));
	$collection_title = metadata('collection', array('Leeds-GATE element set', 'GATE Title'));
	
	echo "<li><a href=\"$collection_link_address\"/>";
	echo $collection_title;
	echo "</a></li>";
	?>
	<li> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?></li>
    </ul>
    
</div>





<?php //echo "<div><h2>".metadata('item', array('Leeds-GATE element set', 'GATE Title'))."</h2></div>"; ?>





<!--    ------------------------------------------------------------------------------------------------------- -->

<!-- Begin primary -->

<div id="primary">

    <div class="worko-tabs">
	
	<input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
	<input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
	<input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
	<input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" />

	<div class="tabs flex-tabs">
            <label for="tab-one" id="tab-one-label" class="tab">Description</label>
            <label for="tab-two" id="tab-two-label" class="tab">Gypsy and Traveller Voices</label>
            <label for="tab-three" id="tab-three-label" class="tab">Details</label>
            <label for="tab-four" id="tab-four-label" class="tab">Citation</label>


            <div id="tab-one-panel" class="panel active">

		<p><b>Description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Description')); ?></p>

	    </div>

	    <div id="tab-two-panel" class="panel">
		<p><b>Voices:</b><?php echo metadata('item', array('Leeds-GATE element set', 'GATE Gypsy & Traveller voices')); ?></p>


		<hr>

		<?php $files = $item->getFiles(); ?>
		<?php foreach ($files as $file){ ?>

		    <?php if ((metadata($file, 'Mime Type')) === 'image/jpeg') { ?>
			
			<?php //echo "<li><center><img src='" . file_display_url($file) . "'></center></li>"; ?> 
			
    <?php } elseif ((metadata($file, 'Mime Type')) === 'audio/mpeg') { ?>


			<p style="font-size:14px; color:black;"><?php echo metadata($file, 'Original Filename');?></p>

			<style>
			 .audio-img {
			     height: 100px;
			     width: 100px;
			 }
			 img {
			     max-width: 100%;
			     height: auto;
			 }
			</style>
			<div class="audio-img">
			    <a href=<?php echo $file->getWebPath(); ?>>
				
				<?php echo "<img src="; ?>
				<?php echo "/application/views/scripts/images/fallback-audio.png" ; ?>

				<?php echo "></a></div></center></li>"; ?>
				

		    <?php } else { ?>

			<?php echo "nada"; ?>

		    <?php } ?>

		<?php } ?>
		
            </div>
            <div id="tab-three-panel" class="panel">
		<!-- 1) GATE Reference Code -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Reference code'))): ?> 
		    <br><b>Reference code:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Reference code')); ?>
		<?php endif; ?>


		<!-- 2) GATE Title -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Title'))): ?> 
		    <br><b>Title:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?>
		<?php endif; ?>
		
            </div>
            <div id="tab-four-panel" class="panel">
		<p>
		    <?php //my_custom_citation($item); ?>
		    <?php //echo metadata('item', 'citation', array('no_escape' => true)); ?>

		    <?php
		    $publication = option('site_title');
		    $url = WEB_ROOT.'/items/show/'.$item->id;
		    $title = metadata('item', array('Leeds-GATE element set','GATE Title'));
		    $reference_code = metadata('item', array('Leeds-GATE element set','GATE Reference code'));
		    $today = date("F j, Y");
		    $citation = $title.'. Ref: '.$reference_code.'. <em>'.$publication.'</em>, accessed '.$today.', '.$url;
		    echo $citation;
		    //echo $item->id;
		    ?>

		    
		</p>
            </div>
	</div>

    </div>


    
    <!-- Begin tabbed-content style -->
    
  
	    


		    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

		    <!-- End tabbed-content style -->
		    


	<!-- end primary -->      

    </div>

    <!-- Javascript to load default Item tab -->

    <script>
     document.getElementById("defaultOpen").click();
     document.getElementById("defaultOpen").focus();
    </script>




    <aside id="item_sidebar">


	<!--    MOVED TO TOP If the item belongs to a collection, the following creates a link to that collection. -->

	<!--    <?php if (metadata('item', 'Collection Name')): ?> -->
	<!--    <div id="collection" class="element"> -->
	<!--        <h2><div class="element-text">The <?php echo link_to_collection_for_item(); ?> collection</div></h2> -->
	<!--    </div> -->
	<!--        <?php endif; ?> -->

	<!--    ------------------------------------------------------------------------------------------------------- -->


	<!--    <?php if ((get_theme_option('Item FileGallery') == 0) && metadata('item', 'has files')): ?>
	     <!-------------- Set to thumbnail - can also be set to fullsize -->

	<!--    <?php echo files_for_item(array('imageSize' => 'thumbnail')); ?>
	     <!--     <?php endif; ?>
	     <!-------------- The following returns all of the files associated with an item. -->

	<!--     <?php if ((get_theme_option('Item FileGallery') == 1) && metadata('item', 'has files')): ?> -->
	<!--     	   <div id="itemfiles" class="element"> -->
	<!--           	<h2><?php echo __('Files'); ?></h2> -->
	<!--           	     <?php echo item_image_gallery(); ?> -->
	<!--	   </div> -->
	<!--    <?php endif; ?> -->



	<!-------------- image slider ----- -->

	<style>
	 .unslider {
	     position: relative;
	 }
	 .unslider-arrow {
	     position: absolute;
	     top: 50%;
	 }			    }
	 
	</style>

	

	<!--- <script>jQuery(document).ready(function() {  alert("jQuery is working."); });</script> --->
	<div class="my-slider">
	    <?php $files = $item->getFiles(); ?>
	    <?php $numberOfFiles = count($files); ?> 
	    <?php $itemImage = files_for_item(array('imageSize' => 'thumbnail')); ?>
	    <?php if($itemImage && $numberOfFiles == 1){ ?>
		<?php echo files_for_item(array('imageSize' => 'thumbnail')); ?> 
<?php } elseif ($itemImage && $numberOfFiles > 1){ ?>
		<?php echo "<ul>" ?>
		<?php $files = $item->getFiles(); ?>
		<?php foreach ($files as $file){ ?>
		    <?php if ((metadata($file, 'Mime Type')) === 'image/jpeg') { ?>
			
			<?php echo "<li><center><img src='" . file_display_url($file) . "'></center></li>"; ?> 
			
    <?php } elseif ((metadata($file, 'Mime Type')) === 'audio/mpeg') { ?>
			
			<li><center>     <p style="font-size:14px; color:white;"><?php echo metadata($file, 'Original Filename');?></p>
			    <a href=<?php echo $file->getWebPath(); ?>>
				
				<?php echo "<img src="; ?>
				<?php echo "/application/views/scripts/images/fallback-audio.png" ; ?>
				<?php echo "></a></center></li>"; ?>
		    <?php } else { ?>
			<?php echo "nada"; ?>
		    <?php } ?>
		    
		    <?php //echo "<li><center><img src='" . file_display_url($file, $format = 'thumbnail') . "'></center></li>"; ?> 
		    
		<?php } ?>
		<?php echo "</ul>" ?>
	    <?php } else { ?>
		<?php echo '<p class="noimage">There is no image for this dataset</p>' ?> 
	    <?php } ?>
	    <script>
	     jQuery(document).ready(function($) {
		 $('.my-slider').unslider({
		     //animation: 'fade',
		     //autoplay: true,
		     nav: true, 
		     arrows: false
		 });
	     });
	    </script>
	</div>
	
	<!-- The following prints a list of all tags associated with the item -->


	<?php if (metadata('item', 'has tags')): ?>
            <div id="item-tags" class="element">
		<h2><?php echo __('Tags'); ?></h2>
		<div class="element-text"><?php echo tag_string('item'); ?></div>
	    </div>
	<?php endif;?>
	



	<!-- REMOVED The following prints a citation for this item. -->

	<!-- <div id="item-citation" class="element"> -->
	<!--        <h2><?php echo __('Citation'); ?></h2> -->
	<!--        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div> -->
	<!--     </div> -->

    </aside>

    <ul class="item-pagination navigation">
	<li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
	<li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

    <?php echo foot(); ?>
