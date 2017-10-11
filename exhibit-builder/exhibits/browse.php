<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
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

 
 

</style>

<div id ="breadcrumb-exhibit">
    <ul class="breadcrumb">
	<?php 	$root = WEB_ROOT;
	echo "<li><a href=\"$root\">Home</a></li>";
	?>	
	<li><?php echo $title; ?></li>
    </ul>

</div>

<?php if (count($exhibits) > 0): ?>
    <nav class="navigation" id="secondary-nav">
	<?php echo nav(array(
            array(
		'label' => __('Browse All'),
		'uri' => url('exhibits')
            ),
            array(
		'label' => __('Browse by Tag'),
		'uri' => url('exhibits/tags')
            )
	)); ?>
    </nav>

    <?php echo pagination_links(); ?>

    <?php $exhibitCount = 0; ?>
    <?php foreach (loop('exhibit') as $exhibit): ?>
	<?php $exhibitCount++; ?>

	<div id ="breadcrumb-exhibit">
	    <div class="exhibit <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
        <h2><?php echo link_to_exhibit(); ?></h2>
        <?php if ($exhibitImage = record_image($exhibit, 'square_thumbnail')): ?>
            <?php echo exhibit_builder_link_to_exhibit($exhibit, $exhibitImage, array('class' => 'image')); ?>
        <?php endif; ?>
        <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
        <div class="description"><?php echo $exhibitDescription; ?></div>
        <?php endif; ?>
        <?php if ($exhibitTags = tag_string('exhibit', 'exhibits')): ?>
        <p class="tags"><?php echo __('Tags: ') . $exhibitTags; ?></p>
        <?php endif; ?>


</div>

</div>


<?php endforeach; ?>

<?php echo pagination_links(); ?>

<?php else: ?>
<p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
