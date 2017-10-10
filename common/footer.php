</div><!-- end content -->

<footer role="contentinfo">

       

    <div id="custom-footer-text">


        <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
	    
	    <div class="floating-box-footerText">
		<?php echo $footerText; ?>
	    </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
	    
	    <div class="floating-box-footerText">
		<?php echo $copyright; ?>
	    </div>
        <?php endif; ?>


	<div align="right">
	    
	    <div class="floating-box-Leeds-GATE-logo">
		<?php
		Leeds_GATE_logo();
		?>
	    </div>

	    <div class="floating-box-hlf-logo">
	    <?php
	    hlf_logo();
	    ?>
	    </div>
	    
	    <!-- Add icon library -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <!-- Add font awesome icons -->

	    <div class="floating-box-twitter">
		<a href="https://twitter.com/GATEArchive" i class="fa fa-twitter" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"></a>
	    </div>

	    <div class="floating-box-facebook">
		<a href="https://www.facebook.com/LeedsGATE/" i class="fa fa-facebook" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"></a>
	    </div>
	    
		
		<?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
	    </div>

	    
        </div>
</footer>

	</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    Omeka.showAdvancedForm();
    Omeka.skipNav();
    Omeka.megaMenu("#top-nav");
    Seasons.mobileSelectNav();
});
</script>

</body>

</html>
