<?php
/**
 * Template Name: work Page
 */

get_header(); ?>

<!--<div class="container works"> -->
<!-- 	<div class="row">-->
		

<!--  </div > -->
<!--</div>-->
<!--<div class="clearfix"></div>-->
<section class="banner-sec">
    <div class="col-md-12">
        <div class="row">
            <div style="margin-bottom:0;">

                <div class="col-md-12 hgi img_back">
                    <img src="../wp-content/themes/trueblueadvisory/img/work-page-slider.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="work-sec">
    <div class="container">
        <div class="row">
            <div class="text-left work-sec-title col-md-12">
                <h1 class="color_font_black">From Creative to Strategy.</h1>
                <h1 class="color_font_black" style="">From Start-ups to fortune 500s; Our work has them all.</h1>
                <p class="color_font_black mt-0">We have worked with a variety of industries that value us for our hightlyimaginative yet practical talent advisory and execution services. When we ask them what they value most we always get the same answers. They love the memes we share
                    with each other and results we have achieved together.</p>
            </div>
        </div>
        <div class="row">
            
            <?php
  $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'our_work', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
    ));
    $k=	0;
	$output ='<ul class="nav navbar-nav">';
   
      
    foreach($posts as $post){
		 $k++;
  
    $work_logo = get_field('work_logo', $post->ID);
    $work_page_link = get_field('work_page_link', $post->ID);
    $work_content = get_field('work_content', $post->ID);
    $facebook_link = get_field('facebook_link', $post->ID);
    $instagram_link = get_field('instagram_link', $post->ID);
    $linkedin_link = get_field('linkedin_link', $post->ID);
    $website_link = get_field('website_link', $post->ID);
   
 
  ?>
    
    <div class="col-md-4">
                <div class="gal-sec" style="margin-bottom:30px;">
                    <div class="gal-img-sec">
                        <img src="<?php echo $work_logo['url']; ?>" class="img-responsive" alt="<?php echo $work_logo['alt']; ?>" title="<?php echo $work_logo['title']; ?>">
                    </div>
                    <div class="gal-content-sec">
                        <div class="gal-content text-center">
                            <p><?php echo $work_content; ?></p>
                        </div>
                    </div>
                    <?php if($work_logo['title'] != 'prosus' && $work_logo['title'] != 'nearby' ) { ?>
                    <div class="gal-button-sec">
                        <a href="<?php echo $work_page_link?>" target="_blank" class="btn">View Project</a>
                    </div>
                    <?php } ?>
                    <div class="gal-social-sec">
                        <?php if(!empty($facebook_link)) { ?>
                        <a href="<?php echo $facebook_link; ?>">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <?php } ?>
                        <?php if(!empty($instagram_link)) { ?>
                        <a href="<?php echo $instagram_link; ?>">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                            
                        </a>
                        <?php } ?>
                        <?php if(!empty($linkedin_link)) { ?>
                        <a href="<?php echo $linkedin_link; ?>">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <?php } ?>
                        <?php if(!empty($website_link)) { ?>
                        <a href="<?php echo $website_link; ?>">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
    <!--<div class="clearfix"></div>-->
<?php	} ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>