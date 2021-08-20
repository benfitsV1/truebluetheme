<?php
/**
 * Template Name: Thank you page
 */

get_header(); 
$banner=get_field('banner', 193);
$caption=get_field('caption', 193);
$phone_number=get_field('phone_number', 193);
$address=get_field('address', 193);
$bottom_content=get_field('bottom_content', 193);
$phone_number_image_icon=get_field('phone_number_image_icon', 193);
$address_image_icon=get_field('address_image_icon', 193);
$business_inquiries_text=get_field('business_inquiries_text', 193);
$business_inquiries_link=get_field('business_inquiries_link', 193);

?>

<div class="clearfix"></div>

<div class="container text-center">
  <h1 style="text-align: left;">Thank you for reaching out to us. <br>
Our representative will get back to you shortly. </h1> 
	 
	 
</div>
	
		
<div class="clearfix"></div>

<div class="grey ">
  <div class="container contact">
    <h1 class="space_top_10 text-center">Let’s talk.</h1>
    <div class="col-md-6 text-center space_top_10 contact_border"><a href="tel:<?php echo $phone_number; ?>">  <img src="<?php echo $phone_number_image_icon['url']; ?>" title="<?php echo $phone_number_image_icon['title']; ?>" alt="<?php echo $phone_number_image_icon['alt']; ?>">
      <p>Give us a ring at<br>
       <?php echo $phone_number; ?></p></a>
    </div>
    <div class="col-md-6 text-center space_top_10 "> <a href="https://goo.gl/maps/NrZ8PGz7EjiP6m258"><img src="<?php echo $address_image_icon['url']; ?>" title="<?php echo $address_image_icon['title']; ?>" alt="<?php echo $address_image_icon['alt']; ?>"></a>
      <p><a href="https://goo.gl/maps/NrZ8PGz7EjiP6m258"><?php echo $address; ?></a>
	  </p>
    </div>
  </div>
</div>
<div class="container ">
   <p class=" text-center"><?php echo $bottom_content; ?></p>    
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>