<?php
$pageTitle = __('Browse our collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>


<h1><?php echo $pageTitle; ?></h1>

<ul class="flex-container">

    <?php foreach (loop('collections') as $collection): ?>

	<!-- begin class="collection" -->
	
	<li class="collection record">

	    
	    <?php //$collectionTitle = strip_formatting(metadata('collection', array('Leeds-GATE element set', 'GATE Title')));?>


	    <?php
	    $linkid = metadata('collection', 'id');
	    $linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Reference code'));
	    $root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.png';
	    echo "<a href=\collections/show/$linkid><img src=\"$root\"  /></a>";
	    ?>



	</li>

	<!-- end class="collection" -->

<?php endforeach; ?>

</ul>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this)); ?>

<?php echo foot(); ?>
