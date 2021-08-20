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
<div class="clearfix"></div>
<?php get_footer(); ?>