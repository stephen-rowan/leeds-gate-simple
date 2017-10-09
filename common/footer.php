</div><!-- end content -->

<footer role="contentinfo">

    <style>


     .floating-box-footerText {
	 float: left;
	 width: 40%;
	 /*	 width: 400px; */
	 /* height: 75px; */
	 /*  margin: 10px; */
	 /*  border: 3px solid #73AD21; */
     }


     
     .floating-box-Leeds-GATE-logo {
	 float: right;
	 width: 10%;
	 height: 75px;
     }

     .floating-box-facebook {
	 float: right;
	 /*  width: 10%; */
	 height: 75px;
     }


     .floating-box-twitter {
	 float: right;
	 /*  width: 10%; */
	 height: 75px;
     }

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
