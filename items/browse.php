<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
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

<div id ="breadcrumb-item">
    <ul class="breadcrumb">
	<?php 	$root = WEB_ROOT;
	echo "<li><a href=\"$root\">Home</a></li>";
	?>	
	<li><?php echo $pageTitle; ?></li>
    </ul>

</div>

<div>
    
    <ul class="flex-container">

	<?php foreach (loop('items') as $item): ?>


	    <li class="item record">
		<!-- <li class="flex-item"> -->
     		<?php $itemTitle = strip_formatting(metadata('item', array('Leeds-GATE element set', 'GATE Title'))); ?>
		
	 	<?php if (metadata('item', 'has thumbnail')): ?>
		    
		    <div class="img">
			<?php echo link_to_item(item_image('fullsize', array('alt' => $itemTitle))); ?>
		    </div>
		<?php endif; ?>

	    </li>


  
	    


<?php endforeach; ?>
</ul>

</div>

<?php echo pagination_links(); ?>


<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
