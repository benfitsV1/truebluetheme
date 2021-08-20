<?php
/**
 * Template Name: about us
 */

get_header(); 
$about_banner=get_field('about_banner', 102);
$about_us_main_head=get_field('about_us_main_head', 102);

$about_us_main_description=get_field('about_us_main_description', 102);
$about_us_sub_heading=get_field('about_us_sub_heading', 102);
$about_us_sub_section_background=get_field('about_us_sub_section_background', 102);
$about_us_sub_section_1=get_field('about_us_sub_section_1', 102);
$about_us_sub_section_2=get_field('about_us_sub_section_2', 102);
$about_us_sub_section_4=get_field('about_us_sub_section_3', 102);
$about_us_sub_section_3=get_field('about_us_sub_section_4', 102);
$join_us_description=get_field('join_us_description', 16);

?>
<div class="col-md-12 ">
  <div class="row"> <img src="<?php echo $about_banner['url']; ?>" class="img-responsive" alt="<?php echo $about_banner['alt']; ?>" title="<?php echo $about_banner['title']; ?>" alt="<?php echo $about_banner['alt']; ?>"> </div>
</div>
<div class="clearfix"></div>
<div class="container text-center">
  <h1><?php echo $about_us_main_head; ?></h1>
  <p><?php echo $about_us_main_description; ?>
</p>
 </div>
<div class="col-md-12 process_hero"     style="background-image: url('<?php echo $about_us_sub_section_background['url']; ?>');background-size: cover;  background-position: center;">
  <div class="container relative">
    <p class="h1"><?php echo $about_us_sub_heading; ?> 
</p>
  </div>
  <div class="boxee row footer">
    <div class="col-md-3 fott">
      <p><?php echo $about_us_sub_section_1; ?></p>
    </div>
    <div class="col-md-3 fott">
      <p><?php echo $about_us_sub_section_2; ?></p>
    </div>
    <div class="col-md-3 fott">
      <p><?php echo $about_us_sub_section_3; ?></p>
    </div>
    <div class="col-md-3 fott">
      <p><?php echo $about_us_sub_section_4; ?></p>
    </div>
    <div class="col-md-12 fott">&nbsp;
</div>
  </div>
</div>
<div class="clearfix"></div>
<div class="container text-center ">
  <h1>Meet the masterminds </h1>
  <p>The team behind the dream</p>
  <div class="row team spo space_top_10">
    <?php
	   $our_masterminds = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'our_masterminds', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'DESC'			
      ));
	   $k=0;
	   foreach($our_masterminds as $post_masterminds)
	   {
	
       $masterminds_person_tag = get_field('masterminds_person_tag', $post_masterminds->ID);
       $masterminds_position = get_field('masterminds_position', $post_masterminds->ID);
       $mastermind_email = get_field('mastermind_email', $post_masterminds->ID);
       $master_mind_linkedin_link = get_field('master_mind_linkedin_link', $post_masterminds->ID);
       $master_mind_picture = get_field('master_mind_picture', $post_masterminds->ID);
     
       $k++;
  
       echo '  <div class="col-md-4 "> <img src="'.$master_mind_picture['url'].'" class="img-circle img-responsive"  alt="'.$master_mind_picture['alt'].'" title="'.$master_mind_picture['title'].'" >
      <h3>'.$post_masterminds->post_title.'</h3>
      <p> <span class="profile_caption">'.$masterminds_person_tag.' </span> <span class="designation"><strong>'.$masterminds_position.' </span><span style="color:#337ab7"> '.$mastermind_email.'</span> <a href="'.$master_mind_linkedin_link.' "><i class="fa fa-linkedin-square linkedin"s aria-hidden="true"></i></a>
      
      <div class="clearfix"></div>
      </p>
    </div>';
	 if($k==3)
	 {
	echo  '<div class="clearfix"></div>';
    $k=0;	
	 }
	   }
	  ?>
 
  </div>
</div>
<div class="clearfix"></div>

<div class="container text-center" id="careers_form">
  <h1><?php echo $join_us_description; ?></h1> 
	<div class="cta_btn">   <a href="/careers#Current_Openings" onclick="ga('send', 'event', 'career', 'click');">JOIN US </a></div>	

</div>
<div class="clearfix"></div>
<?php get_footer(); ?>