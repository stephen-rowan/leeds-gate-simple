<?php
$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));
$collectionDesc = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>



<aside id="sidebar">
<div>
<h1><?php echo $collectionTitle; ?></h1>
<h3><?php echo $collectionDesc; ?></h3>


<?php $collectionId = metadata('collection', 'id'); ?> 


<?php $collectionTree = get_db()->getTable('CollectionTree')->getCollectionTree($collectionId); ?>
<?php echo $this->CollectionTreeList($collectionTree); ?>
</div>
  
</aside>

<ul class="flex-container">

<?php $collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));?>

<?php //echo metadata('collection', array('Leeds-GATE element set', 'GATE Title')); ?>
<?php //echo "test"; ?>
 
<?php 

$collectionId = metadata('collection', 'id'); 



function Leeds_GATE_get_child_collections($collectionId) {
    if(plugin_is_active('CollectionTree')) {
        $treeChildren = get_db()->getTable('CollectionTree')->getChildCollections($collectionId);
        $childCollections = array();
        foreach($treeChildren as $treeChild) {
            
           
           echo '<li class="collection record">';
           
            $linkid = ($treeChild['id']);
            $linktext = ($treeChild['name']);
            echo "<a href='$linkid'>$linktext</a>";
            
            
            //set_current_collection(get_collection_by_id($treechild['id']));
            //echo metadata('collection', array('Leeds-GATE element set', 'GATE Title'));
            
            
            //$collectionTitle = metadata(($treeChild['name']), 'Title'); 
            //echo $collectionTitle;
            
            echo '</li>';
	  
	
	  //$childCollections[] = get_collection_by_id($treeChild['id']);
    
        }
        return $childCollections;
    }
    return array();
}


Leeds_GATE_get_child_collections($collectionId); 



?>

 
</ul>





  <ul class="flex-container">


    
    
  
    
    <?php if (metadata('collection', 'total_items') > 0): ?>
    
    

     
        <?php foreach (loop('items') as $item): ?>
        
        <li class="item record">
        <?php $itemTitle = strip_formatting(metadata('item', array('Leeds-GATE element set', 'GATE Title'))); ?>
       
             
        <div class="item hentry">
            <h3><?php echo link_to_item($itemTitle, array('class'=>'permalink')); ?></h3>

            <?php if (metadata('item', 'has thumbnail')): ?>
            <div class="item-img">
                <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
            </div>
            <?php endif; ?>

            <?php if ($text = metadata('item', array('Item Type Metadata', 'Text'), array('snippet'=>250))): ?>
            <div class="item-description">
                <p><?php echo $text; ?></p>
            </div>
            <?php elseif ($description = metadata('item', array('Leeds-GATE element set', 'GATE Description'), array('snippet'=>250))): ?>
            <div class="item-description">
                <?php echo $description; ?>
            </div>
            <?php endif; ?>
            
        </div>
        
         </li>
         
        
        
        <?php endforeach; ?>
    <?php else: ?>
        <p><?php //echo __("There are currently no items within this collection."); ?></p>
    <?php endif; ?>
   
   
    
    
  </ul>





<?php echo foot(); ?>
