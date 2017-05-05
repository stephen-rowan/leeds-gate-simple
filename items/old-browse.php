<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<nav class="items-nav navigation secondary-nav">


<?php echo public_nav_items(); ?>

<?php echo item_search_filters(); ?>
<?php echo pagination_links(); ?>


<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'ISAD-G,ISAD-G Title';
$sortLinks[__('Creator')] = 'ISAD-G,ISAD-G Name of Creator';
$sortLinks[__('Date Added')] = 'added';
?>

<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?>


</nav>


<ul class="flex-container">

<?php foreach (loop('items') as $item): ?>
  
<li class="item record">

<h4><?php echo link_to_item(metadata('item', array('ISAD-G', 'ISAD-G Title')), array('class'=>'permalink')); ?></h4>

<div class="item-meta">

    <?php if (metadata('item', 'has thumbnail')): ?>

<div class="item-img">
      <?php echo link_to_item(item_image('square_thumbnail')); ?>
    </div>

<?php endif; ?>

    <?php if ($description = metadata('item', array('ISAD-G', 'ISAD-G Name of Creator'), array('snippet'=>250))): ?>
    <div class="item-description">
    <?php echo $description; ?>
    </div>
    <?php endif; ?>

    <?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    </div>

    <?php endif; ?>

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div><!-- end class="item-meta" -->

</li><!-- end class="item hentry" -->


<?php endforeach; ?>
</ul>



<?php echo pagination_links(); ?>

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>