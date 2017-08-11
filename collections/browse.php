<?php
$pageTitle = __('Browse our collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>

<?php function get_collection_image($id){
		$collectionImages=array(
   			5=>WEB_ROOT.'/themes/simple/images/Leeds-GATE.png', // collection 1
   			1=>WEB_ROOT.'/themes/simple/images/Leeds-Trav-Ed.png', // collection 1
   			3=>WEB_ROOT.'/themes/simple/images/Rob-Martin.png', // collection 1
   			2=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Member.png', // collection 1
   			4=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Photo.png', // collection 1
   			8=>WEB_ROOT.'/themes/simple/images/Leeds-GATE-Bio.png', // collection 1
		);
		if(isset($collectionImages[$id])){
            echo "<a href=\"show/$id\"><img src=\"$collectionImages[$id]\"  /></a>";
            return $collectionImages[$id];
		}else{
			$fallbackImage=WEB_ROOT.'/themes/simple/images/default.png'; //fallback
            echo "<a href=\"show/$id\"><img src=\"$fallbackImage\"  /></a>";
            return $fallbackImage;

		}
}
?>


<h1><?php echo $pageTitle; ?></h1>

<ul class="flex-container">

<?php foreach (loop('collections') as $collection): ?>

<li class="collection record">

      
<?php $collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));?>

<h4><?php //echo link_to_collection($collectionTitle); ?></h4>

<img><?php get_collection_image(metadata('collection', 'id')) ?></img>

<?php $description = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));?>

<p><?php //echo $description; ?></p>

  
      
    
</li>

<!-- end class="collection" -->

<?php endforeach; ?>

</ul>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this)); ?>

<?php echo foot(); ?>
