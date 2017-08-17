<?php
$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));
$collectionDesc = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));
?>

<?php function get_collection_image($id){
    $collectionImages=array(
        5=>WEB_ROOT.'/themes/simple/images/Leeds-GATE.png', // collection 1
   	1=>WEB_ROOT.'/themes/simple/images/Leeds-Trav-Ed.png', // collection 1
   	3=>WEB_ROOT.'/themes/simple/images/Rob-Martin.png', // collection 1
   	2=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Member.png', // collection 1
   	4=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Photo.png', // collection 1
   	8=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Bio.png', // collection 1
	9=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Bio.png', // collection 1
    );
    if(isset($collectionImages[$id])){
        echo "<a href=\"$id\"><img src=\"$collectionImages[$id]\"  /></a>";
        return $collectionImages[$id];
    }else{
	$fallbackImage=WEB_ROOT.'/themes/simple/images/default.png'; //fallback
	echo "<a href=\"\"><img src=\"$fallbackImage\"  /></a>";
        return $fallbackImage;

    }
}
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>






<aside id="sidebar">
    <div>
	<center>
	    <?php
	    $linkid = metadata('collection', 'id');
	    $linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Reference code'));
	    $root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.png';
	    echo "<a href=\"$linkid\"><img src=\"$root\"  /></a>";
	    ?>	
	</center>
	

	
	<h3><?php echo $collectionDesc; ?></h3>

	<?php $collectionId = metadata('collection', 'id'); ?> 

	<?php $collectionTree = get_db()->getTable('CollectionTree')->getCollectionTree($collectionId); ?>
	<?php echo $this->CollectionTreeList($collectionTree); ?>
    </div>
    
</aside>

<ul class="flex-container">

    <?php $collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));?>

    <?php 

    function Leeds_GATE_get_child_collections($collectionId) {
	if(plugin_is_active('CollectionTree')) {
            $treeChildren = get_db()->getTable('CollectionTree')->getChildCollections($collectionId);
            $childCollections = array();
            foreach($treeChildren as $treeChild) {
		
		echo '<li class="collection record">';
		
		$linkid = ($treeChild['id']);
		
		set_current_record('collection', get_record_by_id('collection', $linkid));

		$linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Title'));

		echo "<a href='$linkid'>$linktext</a>";

		echo '<div class="img">';
		
		$root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.png';
		echo "<a href=\"$linkid\"><img src=\"$root\"  /></a>";
		

		echo '</div>';
		echo '</li>';
		
            }
            return $childCollections;

	}
	return array();
    }

    $collectionId = metadata('collection', 'id'); 
    Leeds_GATE_get_child_collections($collectionId); 

    ?>

    
</ul>





<ul class="flex-container">


    
    
    
    
    <?php if (metadata('collection', 'total_items') > 0): ?>
	
	

	
        <?php foreach (loop('items') as $item): ?>
            
            <li class="item record">
		<?php $itemTitle = strip_formatting(metadata('item', array('Leeds-GATE element set', 'GATE Title'))); ?>
		
		<?php //echo link_to_item($itemTitle, array('class'=>'permalink')); ?>

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
