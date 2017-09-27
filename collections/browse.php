<?php
$pageTitle = __('Our Collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>

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
	<?php 	$root = WEB_ROOT;
	echo "<li><a href=\"$root\">Home</a></li>";
	?>	
	<li><?php echo $pageTitle; ?></li>
    </ul>

</div>


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
