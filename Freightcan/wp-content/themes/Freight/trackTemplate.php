<?php
/* Template Name: Track Template */
get_header(); ?>
<div class="inner_total_header_part">
<div class="inner_part_header">
  <div class="span3 inner_logo"><a href="<?php bloginfo("url");?>/home"><img src="<?php bloginfo("template_url");?>/images/inner_logo.png"></a></div>
  <div class="span9 pull-right">
      <div class="top_icons_total">
      
      <div class="top_fb_links">
      <a href="#" style="color:#FFF; text-decoration:none;">I</a>
      </div>
      <div class="top_icon">
      <a href="<?php bloginfo("url");?>/home"><div class="link_top_icons"></div></a>
      <a href="#"><div class="link_top_icons"></div></a>
      </div>
      </div>
    <div class="clearfix"></div>
      </div>
<div class="total_inner_menu_part">
<a class="toggleMenu" href="#" style="color:#FFF; text-decoration:underline;">Menu</a>
<?php include('innermenu.php');?>
</div>
  </div>
  <div class="inner_banner">
  <div class="in_banner_heading">Our Services</div>
  <?php get_sidebar('content');?>
  <div class="clearfix"></div>
  </div>
  <div class="inner_total_content_part">
  <div class="container">
  <div class="inner_main_heading">Track and Trace</div>
  <div class="inner_para">
  <div class="login_form">
 <div class="span3">
<input type="text"  class="text_box" placeholder="User Name">
</div>
<div class="span3">
<input type="password"  class="text_box" placeholder="Password">
</div>
<a href="#"><div class="form_submit_btn">Login &nbsp;<img src="<?php bloginfo("template_url");?>/images/icons/arrow.png"></div></a>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php
get_footer(); ?>