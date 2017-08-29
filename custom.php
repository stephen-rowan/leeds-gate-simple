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

<?php 

function Leeds_GATE_get_child_collections($collectionId) {
    if(plugin_is_active('CollectionTree')) {
	$treeChildren = get_db()->getTable('CollectionTree')->getChildCollections($collectionId);
	$childCollections = array();
	foreach($treeChildren as $treeChild) {
	    
	    $linkid = ($treeChild['id']);
	    set_current_record('collection', get_record_by_id('collection', $linkid));
	    $linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Title'));

	    echo '<p>';
	    echo $linktext;
	    echo '</p>';

	}
	return $childCollections;
    }
    return array();
}

?>


<?php

function Leeds_GATE_get_child_collections_images($collectionId) {
    if(plugin_is_active('CollectionTree')) {
	$treeChildren = get_db()->getTable('CollectionTree')->getChildCollections($collectionId);
	$childCollections = array();
	foreach($treeChildren as $treeChild) {

	    echo '<li class="collection record">';
	    
	    $linkid = ($treeChild['id']);
	    
	    set_current_record('collection', get_record_by_id('collection', $linkid));

	    $linktext = metadata('collection', array('Leeds-GATE element set', 'GATE Reference code'));

	    //echo "<a href='$linkid'>$linktext</a>";
	    
	    echo '<div class="img">';
	    
	    $root = WEB_ROOT.'/themes/simple/images/'.$linktext.'.png';
	    echo "<a href=\"$linkid\"><img src=\"$root\"  </img></a>";
	    //echo "<a href=\"$linkid\"><img src=\"$root\"  /></a>";
	    
	    echo $linktext;

	    echo '</div>';
	    echo '</li>';

	}
	return $childCollections;

    }
    return array();
}

?>



<?php 

function Leeds_GATE_logo() {

    $leedsgateimage = WEB_ROOT.'/themes/simple/images/leedsgate.jpg';
    $leedsgatelink = 'http://leedsgate.co.uk/';
    echo "<a href=\"$leedsgatelink\"><img src=\"$leedsgateimage\"  </img></a>";
    //return "<a href=\"$leedsgatelink\"><img src=\"$leedsgateimage\"  </img></a>";

}

?>