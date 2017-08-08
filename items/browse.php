<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>


<ul class="flex-container">

<?php foreach (loop('items') as $item): ?>

<li class="item record">

<div><?php echo link_to_item(metadata('item', array('Leeds-GATE element set', 'GATE Title')), array('class'=>'permalink')); ?></div>

<?php //echo metadata('item', array('Leeds-GATE element set', 'GATE Title')); ?>

<?php if (metadata('item', 'has thumbnail')): ?>

<?php //echo link_to_item(item_image('fullsize')); ?>
  <div class="item-img">
<?php echo link_to_item(item_image('fullsize')); ?>
</div>

<?php endif; ?>


<?php //fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    

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
