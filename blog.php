<?php
/**
 * Template Name: blog
 */

get_header(); 
$blog_banner=get_field('blog_banner', 248);


?>
<div class="col-md-12 ">
  <div class="row"> <img src="<?php echo $blog_banner['url']; ?>" class="img-responsive" alt="blog  Main Banner"> 
  <div class="blogheading-content" >
            <h1 class="blog_text"  >Blogs </h1>
        </div>
  </div>
</div>
<div class="clearfix"></div>

<?php /*
<div class="clearfix"></div>
<div class="container text-center ">
 
  <div class="row  spo space_top_10">
  <?php

$showposts = 18;
$args = array('cat' => 1, 'orderby'  => 'menu_order',
'order'	=> 'ASC', 'posts_per_page' => $showposts,'post_status' => 'publish');
query_posts($args);
    if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $thumbnail_url = get_the_post_thumbnail_url() ?>

     <div class="col-md-4 blog-content "><a href="<?php the_permalink(); ?>"> <img src="<?php echo $thumbnail_url;?>" class=" img-responsive" alt=" <?php the_title(); ?>"></a>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php $excerpt = get_the_excerpt() ?>
       <?php echo $excerpt;?><a href="<?php the_permalink(); ?>">...</a>
      <div class="clearfix"></div>
      </p>
    </div><?php
	 $k++;
	 if($k==3)
	 {
	echo  '<div class="clearfix"></div>';
    $k=0;	
	 } 
    ?>     
   
    <?php endwhile; else: ?>
    <?php endif; ?>

   
</div></div>
*/ ?>
<?php



/* Template Name: blog page */ 

 $medium_page_link=get_field('medium_page_link', 213);
 $facebook_page_link=get_field('facebook_page_link', 213);
 $linkedin_page_link=get_field('linkedin_page_link', 213);
 $instagram_page_link=get_field('instagram_page_link', 213);

get_header();


?>
<style> .blog-img{ max-height: 180px;
overflow: hidden; min-height:auto; } .blog-img img { min-width: -webkit-fill-available;width: 100%;
    height: 170px; } .blog-desc { margin-top: 10px; } 
.activity-img {     max-height: 170px;
    overflow: hidden;margin-bottom: 8px; }
	
</style>

<?php /*
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
*/
?>

<!--<section id="banner" style="background-color: #ebedef;">-->



<!--<div class="container" ><div class="recent-clVVV"><div class="arrow-blog"></div><h5 class="text-primary1 h4" style="font-weight: 700;margin: 0;font-size:24px;">RECENT BLOGS</h5></div></div>-->
<!--</section>-->


<div id="infographic" style="padding: 0;"></div>

<section class="section1" id="mgmt_team"  style="transform:none !important;opacity:1 !important;background-color: #ebedef;">
	<div class="container">
		<div class="row">
                    <div class="col-md-8">
                        <div class="row" id="mix_container">
										
						
					
                       
              
			   <?php
			   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
$args = array (
    'nopaging'               => false,
    'paged'                  => $paged,
    'posts_per_page'         => '100',
    'post_type'              => 'post',
);
	   
$count_posts =get_category('1')->category_count;

 // echo $count_posts."ggggggggggggggggg";	
if((($paged-1)*100+1)>=$count_posts)
{
$paged =0;
}            

    $featured = new WP_Query($args);
  $k=0;

 if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();        

 ?>

<div class="col-md-6 col-lg-6 col-12 blog_expand my-3 pb-4 mix Store">
 <div class="blog-item ">
 <div class="blog-img">
<?php // the_post_thumbnail(); 


?>

 <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="img-fluid"> 
 </div>
 <div class="blog-desc row">
 <div class="col-md-12">
<a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#000;font-size: 24px;" title="<?php echo the_title(); ?>"> <?php //echo wp_trim_words( get_the_title(), 5 ); ?><?php echo substr(get_the_title(),0,30);  //the_title(); ?></a>
 <p></p></div> <?php 

?><?php  $user_id = get_the_author_meta('ID') ;   //echo get_avatar( get_the_author_meta('ID'),'25')."gggggg";
  $key = 'avatar-url';
  $single = true;
  $data = get_user_meta ( $user_id);

  $user_url = get_user_meta( $user_id, $key, $single ); if($user_url==''){$user_url='https://secure.gravatar.com/avatar/87c1634909e2c8d845c84c3a092690ae?s=96&d=mm&r=g';}?><div class="col-md-8 text-primary1" style="text-transform:capitalize; font-size: 0.9rem;margin-top: 10px;"> <a  href="<?php echo $data['linkedin'][0]; ?>"  rel="author" class="a_image" style="font-size: 16px;" target="_blank"><?php echo get_avatar( get_the_author_meta('ID'),'25') ?>&nbsp;<?php  the_author(); ?><span class="text-primary1"> | </span><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></a></div> <div class="col-md-4 text-primary1" id="social-blog-icon">  <header>
					<div class="nav-item">
          <div class="social mr-3 social-over" style="margin-right: 0rem! important;line-height: 1.25;margin-top: 10px;">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="https://twitter.com/share?url=<?php echo the_permalink();?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink();?>&title=<?php the_title(); ?>&source=Vardaan" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
      </div></header> </div>
 
<div class="col-md-12 text-primary1"> <a href="<?php the_permalink(); ?>" style="color:#000;font-size: 16px;
}">Read More...</a></div>
 
 </div>
<!-- <div class="blog-item-footer">
                                    <div class="clearfix"></div>
                                        <div class="row mx-auto">
                                            <div class="col-md-2" style="border-bottom: 1px solid #a2a2a2;">
                                                
                                            </div>
                                            
                                        </div>
</div> -->
</div>
</div>



<?php
endwhile; else:
endif;
?>

<div class="col-md-12 col-lg-12 blog_expand my-3 mix max-auto row Store"> 


 
<div class="col-md-6 text-left"> <?php if($paged > 1) { ?>
<a href="<?php echo home_url();?>/blog/page/<?php echo $paged-1; ?>#infographic" style="text-decoration: none;"><i class="fa fa-angle-left text-primary1" aria-hidden="true" style="font-size: 4rem;
    position: absolute;
    top: -16px;
left: 40px;"></i><span class="h3 text-primary1" style="position:relative;    margin-left: 58px;">PREV &nbsp; </span></a> <?php } ?>
</div>
<div class="col-md-6 text-right"> <?php
if((($paged*100)+1)<=$count_posts)
{
?>
<a href="<?php echo home_url();?>/blog/page/<?php echo $paged+1; ?>#infographic" style="text-decoration: none;"><span class="h3 text-primary1" style="position:relative;    margin-right: 40px;">NEXT &nbsp; <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 4rem;
    position: absolute;
    top: -16px;
    right: -16px;"></i></span></a> <?php 
}
?></div> </div>




</div>
</div>
                    
                    
                                           
     
                    
                    <div class="col-md-4 my-3">
					
					 <?php //echo do_shortcode( '[searchandfilter taxonomies="search"]' ); ?>
					 
                        <div class="popular-bg recent-cl"><div class="arrow-blog"></div><h5 class="text-primary1 h4" style="font-weight: 700;margin: 0;font-size: 24px;">POPULAR BLOGS</h5></div>
                        
                        <?php
 $args = array( 'posts_per_page' => 13, 'orderby' => 'meta_value_num', 'order' => 'ASC'  );         // Not working popular  blogs      
    $featured2 = new WP_Query($args);
  $k=0;
 if ($featured2->have_posts()): while($featured2->have_posts()): $featured2->the_post();                        
 ?> 
     
                        
      <div class="activity my-3" style="margin-bottom:10px;" ><div class="activity-img"> <a href="<?php the_permalink(); ?>">
	  
	<!--  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" style="height:auto;width:auto;" class="img-fluid">--> </a></div>
        <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#000;font-size:16px;"><?php the_title(); ?></a> 
		
       <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#000;"> </a></div>
	   
	   
	    <?php
endwhile; else:
endif;
?>
    
	   

	
	<div class="activity my-3">&nbsp;</div>
	
	<div class="popular-bg recent-cl"><div class="arrow-blog"></div><h5 class="text-primary1 h4" style="font-weight: 700;margin: 0;font-size: 24px;">FOLLOW</h5></div>
	<div class="activity my-3" id="social_header">
	<header style="padding-bottom: 15px;">
					<div class="nav-item">
          <div class="social mr-3 social-over" style="margin-right: 0rem! important;line-height: 1.25;">
           
                 <?php
	   if($medium_page_link!='')
	   {
	   ?>
			<a href="<?php echo $medium_page_link;  ?>"   onclick="ga('send', 'event', 'hello', 'click');">
			   <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In  -->
     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px"
	 height="15px" viewBox="0 0 46.94 26.58" style="enable-background:new 0 0 43.94 35.58;" xml:space="preserve">
     <style type="text/css">
	.st0{fill:#f05a28 !important;}
     </style>
<defs>
</defs>
<path class="st0" d="M13.22,35.52c-4.51,0-8.7,0-12.9,0c-0.2-0.61-0.06-1.1,0.31-1.59c1.27-1.69,2.52-3.38,3.73-5.1
	c0.22-0.31,0.36-0.74,0.36-1.12c0.04-6.77,0.06-13.53,0.05-20.3c0-0.44-0.2-0.95-0.47-1.3c-1.15-1.48-2.39-2.9-3.54-4.38
	C0.44,1.3,0.3,0.73,0,0.06c0.53-0.02,0.77-0.05,1.02-0.05c3.83,0,7.67,0.01,11.5-0.01c0.55,0,0.81,0.17,1.03,0.67
	c3.02,6.73,6.06,13.44,9.09,20.16c0.12,0.26,0.24,0.51,0.42,0.91c0.15-0.34,0.26-0.57,0.36-0.81c2.67-6.7,5.34-13.41,7.98-20.12
	c0.25-0.64,0.56-0.83,1.23-0.82c3.45,0.04,6.89,0.02,10.34,0.02c0.28,0,0.56,0,0.85,0c0.23,0.68,0.1,1.14-0.45,1.57
	c-1.05,0.83-2.06,1.7-3.05,2.61c-0.24,0.23-0.45,0.64-0.45,0.96c0,8.36,0.02,16.72,0.06,25.08c0,0.29,0.17,0.65,0.37,0.85
	c1,1,2.02,1.98,3.08,2.92c0.45,0.4,0.67,0.82,0.48,1.47c-5.77,0-11.56,0-17.6,0c0.23-0.47,0.32-0.9,0.59-1.16
	c1.07-1.07,2.21-2.08,3.29-3.15c0.21-0.21,0.37-0.56,0.37-0.85c0.02-6.46,0.02-12.91,0.01-19.37c0-0.1-0.02-0.2-0.04-0.47
	c-0.18,0.39-0.3,0.63-0.39,0.87c-3.1,7.8-6.19,15.61-9.29,23.41c-0.16,0.39-0.21,0.81-0.84,0.8c-0.59-0.01-0.9-0.16-1.16-0.72
	c-3.48-7.67-6.99-15.33-10.5-22.99c-0.1-0.23-0.21-0.46-0.41-0.87c-0.04,0.32-0.07,0.45-0.07,0.59c-0.05,5.35-0.1,10.7-0.12,16.05
	c0,0.41,0.19,0.9,0.46,1.22c1.47,1.79,3.01,3.52,4.48,5.3C12.92,34.48,13,34.96,13.22,35.52z"/>
</svg>

			</a>
			<?php
			}
			?>
              <?php
	       if($facebook_page_link!='')
		   {
	        ?>
			<a href="<?php echo $facebook_page_link;  ?>"   onclick="ga('send', 'event', 'facebook', 'click');"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<?php
			}
			?>
		<?php
	       if($linkedin_page_link!='')
		   {
	        ?>
			<a href="<?php echo $linkedin_page_link; ?>"   onclick="ga('send', 'event', 'linkedin', 'click');"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<?php
			}
			?>
			<?php
	       if($instagram_page_link!='')
		   {
	        ?>
			<a href="<?php echo $instagram_page_link; ?>"   onclick="ga('send', 'event', 'instagram', 'click');"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<?php
			}
			?>
          </div>
      </div></header>
	  </div> 
 </div>
 
 

                    </div>
	</div>
</section>




	
	

<?php

get_footer();

?>

<style>.a_image img{border-radius:10px;}</style>
<?php wp_footer(); ?>

<div class="clearfix"></div>
<?php get_footer(); ?>