<?php echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => 'page simple-page',
    'bodyid' => metadata('simple_pages_page', 'slug')
)); ?>


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

 
 

</style>

<div>
    <ul class="breadcrumb">
	<?php 	$root = WEB_ROOT;
	echo "<li><a href=\"$root\">Home</a></li>";
	?>	
	<li><?php echo metadata('simple_pages_page', 'title'); ?></li>
    </ul>

</div>


<div id="primary">
    <?php
    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
    echo $this->shortcodes($text);
    ?>
</div>

<?php echo foot(); ?>
