<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 $website_email=get_field('website_email', 213);
 $website_phone=get_field('website_phone', 213);
 $website_description=get_field('website_description', 213);
 $medium_page_link=get_field('medium_page_link', 213);
 $facebook_page_link=get_field('facebook_page_link', 213);
 $linkedin_page_link=get_field('linkedin_page_link', 213);
 $instagram_page_link=get_field('instagram_page_link', 213);
?>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 fott ki hidden-xs" style="height: 222px;">
        <ul>
          <a href="index.html" onclick="ga('send', 'event', 'home', 'click');"><li>Home </li></a>
		  <?php
		  $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'menu', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
           ));
         $k=0;
 
      foreach($posts as $post){
		 $k++;
  
      $menu_link = get_field('menu_link', $post->ID);
   
 
      echo ' <a href="'.$menu_link.'" ><li> '.$post->post_title.' </li></a>'; 
    
    
	     } ?>
        </ul>
      </div>
       <div class="col-md-5 col-sm-12 fott ki padding_left hidden-xs" style="height: 222px;">
        <h3>TrueBlue Advisory</h3>
        <p><?php echo $website_description; ?></p>
      </div>
      <div class="col-md-4 fott padding_left" style="height: 222px;">
        <h3>Connect with us</h3>
        <a href="mailto:<?php echo $website_email; ?>" onclick="ga('send', 'event', 'mail', 'click');"><?php echo $website_email; ?></a><br>
        <a href="tel:<?php echo $website_phone; ?>"><?php echo $website_phone; ?></a>
       <div class="social">
	   <?php
	   if($medium_page_link!='')
	   {
	   ?>
			<a href="<?php echo $medium_page_link;  ?>"   onclick="ga('send', 'event', 'hello', 'click');">
			   <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In  -->
     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="43.94px"
	 height="35.58px" viewBox="0 0 43.94 35.58" style="enable-background:new 0 0 43.94 35.58;" xml:space="preserve">
     <style type="text/css">
	.st0{fill:#1A1A1A;}
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
      </div>
      <div class="col-md-12 po"> All rights reserved. © 2020 TrueBlue Advisory </div>
    </div>
  </div>
</footer>
	
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script> 
	
<script>
	$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".navbar").addClass("fix_nav");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".navbar").removeClass("fix_nav");
        }
    });
}); 	
	
	</script>	
<script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<?php
//$page_name = basename(get_permalink());
//echo $page_name."ggggg";
if($page_name=='our-expertise')
{
?> 
<script src="<?php echo get_template_directory_uri() ?>/js/style.js"></script> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<?php
}
?>	  
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.15/slick.min.js'></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/svgeezy/1.0.0/svgeezy.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/style.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/games-style.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146518712-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146518712-1');
</script>


</body>
</html>
