</div><!-- end content -->

<footer role="contentinfo">

        <div id="custom-footer-text">
            <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
            <p><?php echo $footerText; ?></p>
            <?php endif; ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>


	    <div align="right">
		<?php
		Leeds_GATE_logo();
		?>
		
		<style>

		 /* Style all font awesome icons */
		 .fa {
		     padding: 20px;
		     font-size: 30px;
		     width: 20px;
		     text-align: center;
		     text-decoration: none;
		     border-radius: 50%;
		 }

		 /* Add a hover effect if you want */
		 .fa:hover {
		     opacity: 0.7;
		 }

		 /* Set a specific color for each brand */

		 /* Facebook */
		 .fa-facebook {
		     background: #3B5998;
		     color: white;
		 }

		 /* Twitter */
		 .fa-twitter {
		     background: #55ACEE;
		     color: white;
		 }
		 
		</style>
		
		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Add font awesome icons -->
		
		<a href="https://twitter.com/GATEArchive" i class="fa fa-twitter"></a>
		<a href="https://www.facebook.com/LeedsGATE/" i class="fa fa-facebook"></a>
		
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
