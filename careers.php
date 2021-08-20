<?php
/**
 * Template Name: careers page
 */

get_header(); 
$banners=get_field('banners', 147);
$whats_in_it_for_you_section=get_field('whats_in_it_for_you_section', 147);
$interested_section=get_field('interested_section', 147);
$bottom_text=get_field('bottom_text', 147);

?>

<section class="career">
   	  <div class="col-md-12">
		<div class="row">
		  <div class=" spo">
			 <div class="col-md-6 col-md-offset-1 hi hgi career_text" style="height: 298px;">
			    <h1><?php echo $banners['banner_1_title'] ?></h1>
				<p><?php echo $banners['banner_1_description'] ?> </p>
			 </div> 
			 <div class="col-md-5 hgi img_back" style="height: 298px;background:url('<?php echo $banners['banner_1']['url']; ?>');background-size: cover;background-position: center;
    "> </div> 
 		   </div>
		 </div>	
	  </div>
		  
	  <div class="col-md-12">
		<div class="row">
		  <div class=" spo">
			 <div class="col-md-6 col-md-offset-1 hi hgi career_text" style="height: 272px;">
			    <h1><?php echo $banners['banner_2_title'] ?> </h1>
				<p><?php echo $banners['banner_2_description'] ?> </p>
			 </div> 
			 <div class="col-md-5 hgi img_back" style="height: 272px;background:url('<?php echo $banners['banner_2']['url']; ?>');background-size: cover;background-position: center;"> </div> 
			 <div class="clearfix"></div>
		   </div>	  
         </div>	  
	  </div>
	  <div class="col-md-12">
		<div class="row">
		  <div class=" spo">
			 <div class="col-md-6 col-md-offset-1 hi hgi career_text" style="height: 298px;">
			    <h1><?php echo $banners['banner_3_title'] ?></h1>
				<p><?php echo $banners['banner_3_description'] ?> 
</p>
			 </div> 
			 <div class="col-md-5 hgi img_back" style="height: 298px;background:url('<?php echo $banners['banner_3']['url']; ?>');background-size: cover;background-position: center;"> </div> 
			 <div class="clearfix"></div>
		   </div>	 
        </div>
	  </div>
 </section>
 <div class="clearfix"></div>
 
 <div class="container ">
	    
 	 <h1><?php echo $whats_in_it_for_you_section['title']; ?></h1>
	<p><?php echo $whats_in_it_for_you_section['description']; ?></p> 	
	 <div class="space_top_10"></div>
	 <div class="spo">
	   <div class="col-md-4  ">
		   <div class="career_icon"><img src="<?php echo $whats_in_it_for_you_section['icon1']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon1']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon1']['alt']; ?>"></div>
		   <h2><?php echo $whats_in_it_for_you_section['icon1_title']; ?></h2>
		   <p><?php echo $whats_in_it_for_you_section['icon1_description']; ?> </p>
	   </div>
	   <div class="col-md-4  ">
		   <div class="career_icon"><img src="<?php echo $whats_in_it_for_you_section['icon2']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon2']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon2']['alt']; ?>"></div>
		   <h2><?php echo $whats_in_it_for_you_section['icon2_title']; ?> </h2>
		   <p><?php echo $whats_in_it_for_you_section['icon2_description']; ?> </p>
	   </div>
	   <div class="col-md-4 ">
		   <div class="career_icon"><img src="<?php echo $whats_in_it_for_you_section['icon3']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon3']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon3']['alt']; ?>"></div>
		   <h2><?php echo $whats_in_it_for_you_section['icon3_title']; ?></h2>
		   <p><?php echo $whats_in_it_for_you_section['icon3_description']; ?></p>
	   </div>	 
	   <div class="col-md-4"></div>	
	   <div class="col-md-4"></div>	
	</div>
	<div class="spo">
	   <div class="col-md-4  ">
		 <div class="career_icon"> <img src="<?php echo $whats_in_it_for_you_section['icon4']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon4']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon4']['alt']; ?>">
		  </div> <h2><?php echo $whats_in_it_for_you_section['icon4_title']; ?> </h2>
		   <p><?php echo $whats_in_it_for_you_section['icon4_description']; ?></p>
	   </div>
	   <div class="col-md-4  ">
		  <div class="career_icon"> <img src="<?php echo $whats_in_it_for_you_section['icon5']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon5']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon5']['alt']; ?>"></div>
		   <h2><?php echo $whats_in_it_for_you_section['icon5_title']; ?></h2>
		   <p><?php echo $whats_in_it_for_you_section['icon5_description']; ?></p>
	   </div>
	   <div class="col-md-4  ">
		 <div class="career_icon">  <img src="<?php echo $whats_in_it_for_you_section['icon6']['url']; ?>" title="<?php echo $whats_in_it_for_you_section['icon6']['title']; ?>" alt="<?php echo $whats_in_it_for_you_section['icon6']['alt']; ?>"></div>
		   <h2><?php echo $whats_in_it_for_you_section['icon6_title']; ?></h2>
		   <p><?php echo $whats_in_it_for_you_section['icon6_description']; ?></p>
	   </div>	
	  <div class="clearfix"></div>	
 
	</div> 	
</div>
<div style="background:#f3f3f3;">
  <div class="container">
  <h1><?php echo $interested_section; ?></h1>
  </div>	
</div>
<div class="container" id="Current_Openings">
   <h2 style="color: #F37A54; font-size: 33px;">Our Current Openings</h2>
	  <div class="row">
	  <?php
	   $postsjob = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'our_openings', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'Desc'			
      ));
	   foreach($postsjob as $post_job)
	   {
	
       $job_description = get_field('job_description', $post_job->ID);
       $contact_email = get_field('contact_email', $post_job->ID);
       $job_jd = get_field('job_jd', $post_job->ID);
     
       
  
       echo '<div class="col-md-4 openings" style="margin-bottom:44px;"> 
			<h2>'.$post_job->post_title.'</h2><br>
			<p>'.$job_description.'
			</p>';
		
			if($job_jd!='')
			{
			echo '<p><a href="'.$job_jd.'" style="position:relative;" target="_blank">'.$job_jd.'</a><br></p>';
			}
			
			
			echo '<a href="mailto:'.$contact_email.'" class="btn btn-primary">Apply</a>
         </div>';
	   }
	  ?>
		</div>
		 <div class="space_top_10"></div>
		 <p><?php echo $bottom_text; ?> </p>	
</div>
<?php get_footer(); ?>