<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="legal_total slide" id="slide9" data-slide="9" data-stellar-background-ratio="0">

<div class="legal_heading">Legal</div>

<div class="container">

<div class="legal_para">
<?php get_sidebar('footer'); ?>

</div>

</div>

</div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="container">
<div class="footer_menu">
<a href="#" style="color:#868686; text-decoration:none;"> Home</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> About Us</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Services</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Track & Trace</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Agency Network and Affiliations</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Knowledge Hub</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> BL Terms</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Corporate Snapshot</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Executive Summary</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Legal</a> | 
<a href="#" style="color:#868686; text-decoration:none;"> Contact us</a>
<br>
Copyright @ 2011 Freightcanglobal.com. All rights reserved.
<br>
Designed By <a href="#" style="color:#868686; text-decoration:none;">OPINE</a>
</div>
</div>
</div> 
<script>
var ww = document.body.clientWidth;
jQuery(document).ready(function() {
	jQuery(".nav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})	
	jQuery(".toggleMenu").click(function(e) {
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".nav").toggle();
	});
	adjustMenu();
})

jQuery(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth; 
	adjustMenu();
});
var adjustMenu = function() {
	if (ww < 870) {
		jQuery(".toggleMenu").css("display", "inline-block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".nav").hide();
		} else {
			jQuery(".nav").show();
		}
		jQuery(".nav li").unbind('mouseenter mouseleave');
		jQuery(".nav li a.parent").unbind('click').bind('click', function(e) {
			e.preventDefault();
			jQuery(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 870) {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".nav").show();
		jQuery(".nav li").removeClass("hover");
		jQuery(".nav li a").unbind('click');
		jQuery(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	jQuery(this).toggleClass('hover');
		});
	}
}
</script>
<?php wp_footer(); ?>
</body>
</html>