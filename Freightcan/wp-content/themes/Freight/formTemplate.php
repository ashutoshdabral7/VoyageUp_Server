<?php
/* Template Name: Form Page Template */
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
  </div>
  <div class="clearfix"></div>
  </div>
  <div class="inner_total_content_part">
  <div class="container">
  <div class="inner_main_heading"><span style="font-size:48px;">Enquiry Form</span></div>
  <div class="in_banner_sub_heading"><span style="color:#000;">Get In Touch With Us</span></div>
  <div class="clearfix"></div>
  
  <div class="inner_para">
<p>Please complete the below form and submit to obtain a free quote.</p>
<div class="cus_heading">Customer Information</div>
<p>Note that mandatory fields are denoted by asterisk (*)</p>
<div class="row">
<div class="span3">
<input type="text"  class="text_box" placeholder="*Name">
</div>
<div class="span3">
<input type="text"  class="text_box" placeholder="*E-Mail Address">
</div>
<div class="span3">
<input type="text"  class="text_box" placeholder="*Phone Number">
</div>
<div class="span3">
<input type="text"  class="text_box" placeholder="Fax Number">
</div>
<div class="span6">
<textarea class="text_box" placeholder="*Company"></textarea>
</div>
<div class="span6">
<textarea class="text_box" placeholder="*Address"></textarea>
</div>
<div class="cus_heading">Shipment Information</div>
<p>Note that mandatory fields are denoted by asterisk (*)</p>
<div class="span3">
<input type="text"  class="text_box" placeholder="*Orgin">
</div>
<div class="span3">
<input type="text"  class="text_box" placeholder="*Destination">
</div>
<div class="span3">
<select class="text_box">
<option>*Commodity</option>
</select>
</div>
<div class="span3">
<select class="text_box">
<option>*Equip. Type</option>
</select>
</div>&nbsp;<br/>
<div class="span4">
<input type="text"  class="text_box" placeholder="Rate Indication">
</div>
<div class="span4">
<select class="text_box">
<option>*Equip. Size</option>
</select>
</div>
<div class="span4">
<select class="text_box">
<option>Equip. Type</option>
</select>
</div>
<div class="clearfix"></div>
<div class="span4">
<input type="text"  class="text_box" placeholder="*Weight">
</div>
<div class="span4">
<select class="text_box">
<option>*Measure</option>
</select>
</div>
<div class="span4">
<input type="text"  class="text_box" placeholder="Additional Informations">
</div>
<div class="form_submit_btn">Request A Rate &nbsp;<img src="<?php bloginfo("template_url");?>/images/icons/arrow.png"></div>
</div>
  </div>
  </div>
  <div class="clearfix"></div>
<?php
get_footer(); ?>