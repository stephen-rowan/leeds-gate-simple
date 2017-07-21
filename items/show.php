<?php echo head(array('title' => metadata('item', array('Leeds-GATE element set', 'GATE Title')),'bodyclass' => 'items show')); ?>

<div>
<table>
<tr>

<th><h2><?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?></h2></th>

<?php if (metadata('item', 'Collection Name')): ?> 

<th style="text-align:right">
<?php $collection = get_collection_for_item(); if ($collection):?><?php endif; ?>
<?php $collectionId = metadata($collection, 'id');?>

<?php $collectionTree = get_db()->getTable('CollectionTree')->getCollectionTree($collectionId);?>
<?php echo $this->collectionTreeList($collectionTree);?></th>

<?php endif; ?>

</tr>
</table>
</div>


<!--    ------------------------------------------------------------------------------------------------------- -->

<div id="primary">


<ul class="tab">

<!-- Summary is the default tab -->

    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Summary')" id="defaultOpen">Summary</a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Details')">Details</a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Images')">Images</a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="openItem(event, 'Citation')">Citation</a></li>

</ul>    

<!--    ------------------------------------------------------------------------------------------------------- -->

<div id="Summary" class="tabcontent">

<!--    ------------------------------------------------------------------------------------------------------- -->

     <p>Title : <b><?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?></b></p>


</div>

<!--    ------------------------------------------------------------------------------------------------------- -->

<div id="Details" class="tabcontent">

<!--    ------------------------------------------------------------------------------------------------------- -->

<!-- Leeds-GATE element set Reference Code -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Reference code'))): ?> 
<p><b>Reference code :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Reference code')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Title -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Title'))): ?> 
<p><b>Title :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Name of Creator -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Name of Creator'))): ?> 
<p><b>Name of Creator :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Name of Creator')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Dates of Creation -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Dates of Creation'))): ?>
<p><b>Dates of Creation :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Dates of Creation')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Extent of the Unit of Description -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Extent of the Unit of Description'))): ?>
<p><b>Extent of the unit of description :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Extent of the Unit of Description')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Level of description -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Level of description'))): ?>
<p><b>Level of description :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Level of description')); ?></p\
>
<?php endif; ?>



<!-- Leeds-GATE element set Language of material -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Language of material'))): ?> 
<p><b>Language of material :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Language of material')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Conditions governing access -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Conditions governing access'))): ?> 
<p><b>Conditions governing access :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Conditions governing access')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Collection Scope and Content -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Collection Scope and Content'))): ?> 
<p><b>Collection Scope and Content :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Collection Scope and Content')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set Description -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Description'))): ?> 
<p><b>Description :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Description')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Location it came from -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Location it came from'))): ?> 
<p><b>Location it came from :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Location it came from')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set Current location -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Current location'))): ?> 
<p><b>Current location :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Current location')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set medium/material/format -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE medium/material/format'))): ?> 
<p><b>medium/material/format :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE medium/material/format')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Purpose -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Purpose'))): ?> 
<p><b>Purpose :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Purpose')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set Notes -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE Notes'))): ?> 
<p><b>Notes :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE Notes')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set size/dimensions -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE size/dimensions'))): ?> 
<p><b>size/dimensions :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE size/dimensions')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set related units of description -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE related units of description'))): ?> 
<p><b>Related units of description :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE related units of description')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set date of description -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE date of description'))): ?> 
<p><b>Date of description :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE date of description')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set physical characteristics and technical requirements -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE physical characteristics and technical requirements'))): ?> 
<p><b>Physical characteristics and technical requirements :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE physical characteristics and technical requirements')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set community it belongs to -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE community it belongs to'))): ?> 
<p><b>Community it belongs to :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE community it belongs to')); ?></p>
<?php endif; ?>


<!-- Leeds-GATE element set families it relates to -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE families it relates to'))): ?> 
<p><b>Families it relates to :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE families it relates to')); ?></p>
<?php endif; ?>

<!-- Leeds-GATE element set comments -->

<?php if (metadata('item', array('Leeds-GATE element set','GATE comments'))): ?> 
<p><b>Comments :</b> <?php echo metadata('item', array('Leeds-GATE element set', 'GATE comments')); ?></p>
<?php endif; ?>



</div>


<div id="Images" class="tabcontent">
     <h2>The thumbnails of image files :</h2>
    <?php echo files_for_item(array('imageSize' => 'thumbnail')); ?>
    <p>Some more text here.</p>

</div>


<div id="Citation" class="tabcontent">
<p><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></p>
</div>



<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


<!-- end primary -->      

</div>

<!-- Javascript to load default Item tab -->

<script>
document.getElementById("defaultOpen").click();
</script>




<aside id="sidebar">


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
<?php echo "<li><div>x</div><img src='" . file_display_url($file, $format = 'thumbnail') . "'></li>"; ?> 
<?php } ?>
<?php echo "</ul>" ?>
<?php } else { ?>
<?php echo '<p class="noimage">There is no image for this dataset</p>' ?> 
<?php } ?>

<script>
   jQuery(document).ready(function($) {
                      $('.my-slider').unslider({
nav: true, 
arrows: true
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
