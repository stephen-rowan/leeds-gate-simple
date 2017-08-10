<?php
$pageTitle = __('Browse our collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>

<h1><?php echo $pageTitle; ?></h1>

<ul class="flex-container">

<?php foreach (loop('collections') as $collection): ?>

<li class="collection record">

      
<?php $collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));?>

<h4><?php echo link_to_collection($collectionTitle); ?></h4>


<?php $description = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Description')));?>

<p><?php echo $description; ?></p>

  
      
    
</li>

<!-- end class="collection" -->

<?php endforeach; ?>

</ul>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this)); ?>

<?php echo foot(); ?>
