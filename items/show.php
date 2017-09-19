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

    <!-- Begin tabbed-content style -->
    
    <div id="tabbed_content">

        <ul class="tab">

	    <!-- Description is the default tab -->

	    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Description')" id="defaultOpen">Description</a></li>
	    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Voices')">Gypsy and Traveller Voices</a></li>
	    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Details')">Details</a></li>
	    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Citation')">Citation</a></li>

	</ul>    

	<!--    ------------------------------------------------------------------------------------------------------- -->

	<div id="Description" class="tabcontent">

	    <!--    ------------------------------------------------------------------------------------------------------- -->

	    <p><b>Description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Description')); ?></p>


	</div>

	<!--    ------------------------------------------------------------------------------------------------------- -->

	<div id="Voices" class="tabcontent">

	    <!--    ------------------------------------------------------------------------------------------------------- -->

	    <p><b>Voices:</b><?php echo metadata('item', array('Leeds-GATE element set', 'GATE Gypsy & Traveller voices')); ?></p>


	</div>

	<!--    ------------------------------------------------------------------------------------------------------- -->

	<div id="Details" class="tabcontent">

	    <!--    ------------------------------------------------------------------------------------------------------- -->
	    <!-- Begin Paragraph -->
	    <p>
		<!-- 1) GATE Reference Code -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Reference code'))): ?> 
		    <br><b>Reference code:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Reference code')); ?>
		<?php endif; ?>


		<!-- 2) GATE Title -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Title'))): ?> 
		    <br><b>Title:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?>
		<?php endif; ?>


		<!-- 3) GATE Name of Creator -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Name of Creator'))): ?> 
		    <br><b>Name of Creator:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Name of Creator')); ?>
		<?php endif; ?>


		<!-- 4) GATE Dates of Creation -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Dates of Creation'))): ?>
		    <br><b>Dates of Creation:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Dates of Creation')); ?>
		<?php endif; ?>


		<!-- 5) GATE Level of description -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Level of description'))): ?>
		    <br><b>Level of description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Level of description')); ?>
		<?php endif; ?>


		<!-- 6) GATE Collection -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Collection'))): ?>
		    <br><b>Collection:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Collection')); ?>
		<?php endif; ?>

		<!-- 7) GATE Sub-collection -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Sub-collection'))): ?>
		    <br><b>Sub-collection:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Sub-collection')); ?>
		<?php endif; ?>


		<!-- 8) GATE Extent and medium of the unit of description -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Extent and medium of the unit of description'))): ?>
		    <br><b>Extent of the unit of description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Extent and medium of the unit of description')); ?>
		<?php endif; ?>

		<!-- 9) GATE Physical characteristics and technical requirements -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Physical characteristics and technical requirements'))): ?> 
		    <br><b>Physical characteristics and technical requirements:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Physical characteristics and technical requirements')); ?>
		<?php endif; ?>

		<!-- 10) GATE Conditions governing access -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Conditions governing access'))): ?> 
		    <br><b>Conditions governing access:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Conditions governing access')); ?>
		<?php endif; ?>

		<!-- 11) GATE Conditions governing reproduction -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Conditions governing reproduction'))): ?> 
		    <br><b>Conditions governing reproduction:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Conditions governing reproduction')); ?>
		<?php endif; ?>


		<!-- 12) GATE Language of material -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Language of material'))): ?> 
		    <br><b>Language of material:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Language of material')); ?>
		<?php endif; ?>


		<!-- 13) GATE Description -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Description'))): ?> 
		    <br><b>Description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Description')); ?>
		<?php endif; ?>


		<!-- 14) GATE Date(s) of description -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Date(s) of description'))): ?> 
		    <br><b>Date(s) of description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Date(s) of description')); ?>
		<?php endif; ?>


		<!-- 15) GATE Geographical area -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Geographical area'))): ?> 
		    <br><b>Geographical area:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Geographical area')); ?>
		<?php endif; ?>

		<!-- 16) GATE Immediate source of acquisition or transfer -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Immediate source of acquisition or transfer'))): ?> 
		    <br><b>Immediate source of acquisition or transfer:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Immediate source of acquisition or transfer')); ?>
		<?php endif; ?>


		<!-- 17) GATE Current location -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Current location'))): ?> 
		    <br><b>Current location:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Current location')); ?>
		<?php endif; ?>


		<!-- 18) GATE Related units of description -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Related units of description'))): ?> 
		    <br><b>Related units of description:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Related units of description')); ?>
		<?php endif; ?>


		<!-- 19) GATE Archival history -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Archival history'))): ?> 
		    <br><b>Archival history:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Archival history')); ?>
		<?php endif; ?>


		<!-- 20) GATE Archivists note -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Archivists note'))): ?> 
		    <br><b>Archivists note:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Archivists note')); ?>
		<?php endif; ?>

		<hr>

		<!-- 21) GATE Families -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Families'))): ?> 
		    <br><b>Families:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Families')); ?>
		<?php endif; ?>

		<!-- 22) GATE Gypsy & Traveller voices -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Gypsy & Traveller voices'))): ?> 
		    <br><b>Gypsy & Traveller voices:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Gypsy & Traveller voices')); ?>
		<?php endif; ?>

		<!-- 23) GATE Contentions -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Contentions'))): ?> 
		    <br><b>Contentions:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Contentions')); ?>
		<?php endif; ?>


		<!-- 24) GATE System of arrangement -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE System of arrangement'))): ?> 
		    <br><b>GATE System of arrangement:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE System of arrangement')); ?>
		<?php endif; ?>

		<!-- 25) GATE Biographical history -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Biographical history'))): ?> 
		    <br><b>Biographical history:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Biographical history')); ?>
		<?php endif; ?>

		<!-- 26) GATE Existence and location of originals -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Existence and location of originals'))): ?> 
		    <br><b>Existence and location of originals:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Existence and location of originals')); ?>
		<?php endif; ?>

		<!-- 27) GATE Existence and location of copies -->

		<?php if (metadata('item', array('Leeds-GATE element set','GATE Existence and location of copies'))): ?> 
		    <br><b>Existence and location of copies:</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Existence and location of copies')); ?>
		<?php endif; ?>
		<!-- End Paragraph -->
	    </p>
	</div>



	<div id="Citation" class="tabcontent">

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



	<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

	<!-- End tabbed-content style -->
	
    </div>

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
