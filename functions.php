<?php
function func_home_slider(){
    global $wpdb,$post;
    $output = '';	
	ob_start();	
    $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'home_slider', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
    ));
    $k=	0;
	
	$output='<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">';
	
	  foreach($posts as $post)
	   {
		
	   $active='';
     if($k==0){ $active='active';}
		$output.='<li data-target="#carousel-example-generic" data-slide-to="'.$k.'" class="'.$active.'"></li>
		';
		$k++;
	   }
	 $output.='</ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">';
		
	
	$k=0;
    foreach($posts as $post){
		 $k++;
    $slider_image = get_field('slide_image', $post->ID);
    $slide_link = get_field('slide_link', $post->ID);
   
	$active='';
     if($k==1){ $active='active';}
     $output .= '<div class="item '.$active.' ">';
	 if($slide_link!='')
	 {
	 $output .= '<a href="'.$slide_link.'">';
	 }
	 $output .= '<img src="'.$slider_image['url'].'"  alt="'.$slider_image['alt'].'" title="'.$slider_image['title'].'">';
	 if($slide_link!='')
	 {
	 $output .='</a>'; 
	 }
	$output .='</div>';   
    
    
	} 
	$output .='</div></div>';
	$output .= ob_get_contents();
	ob_end_clean();
	return $output;	
}
add_shortcode( 'HomeSlider', 'func_home_slider');
function func_client_speak_slider(){
    global $wpdb,$post;
    $output = '';	
	ob_start();	
    $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'client_testimonials', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
    ));
    $k=	0;
	$output .='<div class="col-md-5  hgi" >
	 <div class="test_he">
		     <h1>Our Clients Are Our Best Advocates</h1>
 			  <p> 
<strong>Hear what they have to say about us
</strong></p>
		</div> 	
      <div class="carousel-text slider-for">';
       foreach($posts as $post)
	   {
		 $k++;
       $client_name = get_field('client_name', $post->ID);
       $client_position = get_field('client_position', $post->ID);
       $client_testimonial = get_field('client_testimonial', $post->ID);
       
  
       $output .=  '<div> 
			<h2>'.$post->post_title.'</h2><br>
			<h3>'.$client_name.', <br><span><strong>'.$client_position.'</strong> </span></h3>
			<p>'.$client_testimonial.'</p>
         </div>';
	   }
      $output .= '</div>
    </div>';
    
    $output .= '<div class="block-media col-md-7 hgi">
      <div class="row">
        <div class="carousel-images slider-nav hgi">';
		  foreach($posts as $post)
	      {
		  $client_slider_image = get_field('client_slider_image', $post->ID);
          $output .= '<div><img src="'.$client_slider_image['url'].'"  alt="'.$client_slider_image['alt'].'" title="'.$client_slider_image['title'].'"> </div>';
		  }
          
    $output .= '</div>
      </div>
    </div>';
   
	$output .= ob_get_contents();
	ob_end_clean();
	return $output;	
}

add_shortcode( 'ClientSlider', 'func_client_speak_slider');

function func_site_menu(){
    global $wpdb,$post;
    $output = '';	
	ob_start();	
	$page_menu = basename(get_permalink());
	
    $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'menu', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
    ));
    $k=	0;
	
	
	$output ='<ul class="nav navbar-nav">';
 
      
    foreach($posts as $post){
		 $k++;
  
    $menu_link = get_field('menu_link', $post->ID);
    $menu_link_slug =  explode("/",$menu_link);
	$act='';
    //if($page_menu==$menu_link_slug[1])
	if( strcasecmp($page_menu, $menu_link_slug[1]) == 0)
	{
	$act='act';
	}
     $output .= ' <li><a href="'.$menu_link.'" class="'.$act.'"> '.$post->post_title.'</a></li>'; 
    
    
	} 
	$output .='</ul>';
	$output .= ob_get_contents();
	ob_end_clean();
	return $output;	
}

add_shortcode( 'Site_Menu', 'func_site_menu');
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Theme Options');
}

add_theme_support( 'post-thumbnails' );
add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7-mail-sent-ok', function( event ) {
       location = 'https://www.trueblueadvisory.com/thank-you-page/';
}, false );
</script>
<?php
}
?>