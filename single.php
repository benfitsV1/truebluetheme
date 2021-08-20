<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="investor_container container_margin_top col-12 col-sm-12 col-md-12 blog_main">
		<div class="row" id="blog_area_dsp">
			<div class="container">
			<div class="col-md-12">
			<div class="row blogAll">
			    <div class="col-md-9">
					<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
           the_title( '<h1 class="entry-title">', '</h1>' );
				?>
		<div class="entry-content blogSingle">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div>
				
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			

			endwhile; // End the loop.
			?>
		</div>
	<div class="col-md-3 recent-blogs">
	    <div class="row">
            <div class="sec-title">
                <h3>Recent Blogs</h3>
            </div>
        </div>
	    	<div class="row recent-blog-content">
  <?php

$showposts = 8;
$args = array('cat' => 1, 'orderby'  => 'menu_order',
'order'	=> 'ASC', 'posts_per_page' => $showposts,'post_status' => 'publish','post__not_in' => array( $post->ID ));
query_posts($args);

    if (have_posts()) : while (have_posts()) : the_post(); ?>
	
      <?php $thumbnail_url = get_the_post_thumbnail_url() ?>
	     <div class="col-md-12 col-sm-12 col-xs-12 recent-blog-content-sec">
                <div class="row">
                    <div class="col-xs-8">
                        <h4><a href="https://www.trueblueadvisory.com/2020/06/18/hello-world/"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></a></h4>
                        <p><?php echo $excerpt;?><a href="<?php the_permalink(); ?>">...</a></p>
                    </div>
                    <div class="col-xs-4 p-0">
                       <a href="<?php the_permalink(); ?>"> <img src="<?php echo $thumbnail_url;?>" class=" img-responsive" alt=" <?php the_title(); ?>"></a>
                    </div>
                </div>
            </div>
            

   <?php
	 $k++;
	 if($k==4)
	 {
	echo  '<div class="clearfix"></div>';
    $k=0;	
	 } 
    ?>     
   
    <?php endwhile; else: ?>
    <?php endif; ?>

        </div>
	</div>
	</div><!-- .site-main -->

				</div>
			</div>
	</div>

</div><!-- .content-area -->
<div class="clearfix"></div>
  
  
<?php get_footer(); ?>
