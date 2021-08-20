<?php
/**
 * Template Name: Homepage
 */

get_header();
$who_we_are=get_field('who_we_are', 16);
$what_we_did_section=get_field('what_we_did_section', 16);
$what_how_why_section=get_field('what_how_why_section', 16);
$location_section=get_field('location_section', 16);
$join_us_description=get_field('join_us_description', 16);
$conect_with_us_description=get_field('conect_with_us_description', 16);

?>
<div class="col-md-12">
  <div class="row">
<?php echo do_shortcode('[HomeSlider]'); ?>
 	<div class="container text-center">
 		<h1><?php echo $who_we_are['who_we_are_title']; ?></h1>
 		<p><?php echo $who_we_are['who_we_are_description']; ?>
       </p>
		<div class="cta_btn"> <a href="<?php echo $who_we_are['who_we_are_button1_link']; ?>" onclick="ga('send', 'event', 'about_us', 'click');"><?php echo $who_we_are['who_we_are_button']; ?></a> <a href="<?php echo $who_we_are['who_we_are_button_2_link']; ?>" onclick="ga('send', 'event', 'expertise', 'click');"><?php echo $who_we_are['who_we_are_button_2']; ?></a>
		  <div class="clearfix"></div>
		</div>
 	</div>

 </div>
</div>
<div class="col-md-12">
  <div class="row">
	<div class="col-sm-4 col-lg-4">
      <div class="row">
        <figure class="snip1584"><img src="<?php echo $what_we_did_section['what_we_did_image1']['url']; ?>" title="<?php echo $what_we_did_section['what_we_did_image1']['title']; ?>" alt="<?php echo $what_we_did_section['what_we_did_image1']['alt']; ?>">
          <figcaption>
            <h3><?php echo $what_we_did_section['what_we_did_description1']; ?></h3>
          </figcaption>
           <?php if($what_we_did_section['what_we_did_link1']!='')
		  {
	      ?>
          <a href="<?php echo $what_we_did_section['what_we_did_link1']; ?>"></a> 
		  <?php
		  }
		  ?> </figure>
      </div>
    </div>  
    <div class="col-sm-4 col-lg-4">
      <div class="row">
        <figure class="snip1584"><img src="<?php echo $what_we_did_section['what_we_did_image2']['url']; ?>" title="<?php echo $what_we_did_section['what_we_did_image2']['title']; ?>" alt="<?php echo $what_we_did_section['what_we_did_image2']['alt']; ?>">
          <figcaption>
            <h3><?php echo $what_we_did_section['what_we_did_description_2']; ?></h3>
          </figcaption>
		  <?php if($what_we_did_section['what_we_did_link2']!='')
		  {
	      ?>
          <a href="<?php echo $what_we_did_section['what_we_did_link2']; ?>"></a> 
		  <?php
		  }
		  ?>
		  </figure>
      </div>
    </div>
    <div class="col-sm-4 col-lg-4">
      <div class="row">
        <figure class="snip1584"><img src="<?php echo $what_we_did_section['what_we_did_image3']['url']; ?>"  title="<?php echo $what_we_did_section['what_we_did_image3']['title']; ?>" alt="<?php echo $what_we_did_section['what_we_did_image3']['alt']; ?>">
          <figcaption>
            <h3><?php echo $what_we_did_section['what_we_did_description_3']; ?></h3>
          </figcaption>
          <?php if($what_we_did_section['what_we_did_link3']!='')
		  {
	      ?>
          <a href="<?php echo $what_we_did_section['what_we_did_link3']; ?>"></a> 
		  <?php
		  }
		  ?> </figure>
      </div>
    </div>
    
  </div>
</div>
<div class="clearfix"></div>
<div class="container text-center">
  <div class="starter-template">
    <h3><?php echo $what_how_why_section['what__how_why_section_title'] ?></h3>
    <div class="col-md-4 text-center"> <img src="<?php echo $what_how_why_section['what_section_icon']['url']; ?>" class="img-responsive center-block" title="<?php echo $what_how_why_section['what_section_icon']['title']; ?>" alt="<?php echo $what_how_why_section['what_section_icon']['alt']; ?>">
      <h1>What</h1>
      <p> <?php echo $what_how_why_section['what_section_description'] ?></p>
    </div> 
    <div class="col-md-4 text-center"> <img src="<?php echo $what_how_why_section['how_section_icon']['url']; ?>" class="img-responsive center-block" title="<?php echo $what_how_why_section['how_section_icon']['title']; ?>" alt="<?php echo $what_how_why_section['how_section_icon']['alt']; ?>">
      <h1>How</h1>
	  <p> <?php echo $what_how_why_section['how_section_description'] ?></p>
      
    </div>
    <div class="col-md-4 text-center"> <img src="<?php echo $what_how_why_section['why_section_icon']['url']; ?>" class="img-responsive center-block" title="<?php echo $what_how_why_section['why_section_icon']['title']; ?>" alt="<?php echo $what_how_why_section['why_section_icon']['alt']; ?>">
      <h1>Why</h1>
      <p> <?php echo $what_how_why_section['why_section_description'] ?></p>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="clearfix"></div>	
<div class="col-md-12 testi">
  <div class="row spo">
   <?php echo do_shortcode('[ClientSlider]'); ?>
  </div>
  <div class="clearfix"></div>	
</div>      

<div class="col-md-12 text-center">
  <div class="row">
	 <div class="container">
	  <div class="starter-template">
		<h3> <?php echo $location_section['location_head']; ?></h3>
		  <div class="place">
			  <div class="col-md-4"><?php echo $location_section['location_1']; ?></div>
			  <div class="col-md-4"><?php echo $location_section['location_2']; ?></div>
			  <div class="col-md-4"><?php echo $location_section['location_3']; ?></div>
		  </div>
  		<div class="col-md-5 text-center boxer pull-left" style="height: 243px;">
		  <p><?php echo $join_us_description; ?></p>
		  <a href="/careers#Current_Openings" onclick="ga('send', 'event', 'career', 'click');">JOIN US </a> </div>
		<div class="col-md-5 text-center boxer pull-right" style="height: 243px;">
		  <p><?php echo $conect_with_us_description; ?></p>
		  <a href="/connect-with-us#careers_form" onclick="ga('send', 'event', 'contact', 'click');">CONNECT WITH US</a></div>
		<div class="clearfix"></div>
	  </div>
	</div>
  </div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
<script>
 $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    autoplay: true,
});


	</script>	
