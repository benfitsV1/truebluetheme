<?php
/**
 * Template Name: our expertise
 */

get_header(); 
$our_expertise_banner=get_field('our_expertise_banner', 195);
$page_heading=get_field('page_heading', 195);
$page_description=get_field('page_description', 195);
$expertise_in_heading=get_field('expertise_in_heading', 195);
$expertise_1=get_field('expertise_1', 195);
$expertise_2=get_field('expertise_2', 195);
$expertise_3=get_field('expertise_3', 195);
$expertise_4=get_field('expertise_4', 195);
$our_services_main_heading=get_field('our_services_main_heading', 195);
$our_services_main_description=get_field('our_services_main_description', 195);
$our_services=get_field('our_services', 195);
$what_we_do=get_field('what_we_do', 195);
$answer_thankyoumessage=get_field('answer_thankyoumessage', 195);
$question_answer_section_enable=get_field('question_answer_section_enable', 195);

$caption=get_field('caption', 193);

/*
?>
<div class="container ">
  <h1><?php echo $page_heading; ?></h1>
  <p><?php echo $page_description; ?></p>
</div>
 
<div class="qui_back" style="background-image: url('<?php echo $our_expertise_banner['url']; ?>');background-size: cover;">	
	
	<div class="container" >

	<!--questionBox-->
	<div class="questionBox" id="app" >
<?php /* 
		<!-- transition -->
		<transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">

			<!--qusetionContainer-->
			<div class="questionContainer" v-if="questionIndex<quiz.questions.length" v-bind:key="questionIndex">

				 

				<!-- questionTitle -->
				<h2 class="titleContainer title">{{ quiz.questions[questionIndex].text }}</h2>

				 

				<!--quizFooter: navigation and progress-->
				<footer class="questionFooter">

					<!--pagination-->
					<nav class="pagination" role="navigation" aria-label="pagination">
                           <!-- next button -->
						<a class="button" :class="(userResponses[questionIndex]==null)?'':'is-active'" v-on:click="next();" :disabled="questionIndex>=quiz.questions.length">
                    {{ (userResponses[questionIndex]==null)?'N':'Next' }}
                  </a>

						 
						<!-- next button -->
						<a class="button" :class="(userResponses[questionIndex]==null)?'':'is-active'" v-on:click="next();" :disabled="questionIndex>=quiz.questions.length">
                    {{ (userResponses[questionIndex]==null)?'Y':'Next' }}
                  </a>

					</nav>
					<!--/pagination--> 
				</footer>
				<!--/quizFooter-->

			</div>
			<!--/questionContainer-->

			<!--quizCompletedResult-->
			<div v-if="questionIndex >= quiz.questions.length" v-bind:key="questionIndex" class="quizCompleted has-text-centered">
                
				<!-- quizCompletedIcon: Achievement Icon -->
				<span class="icon">
                <i class="fa" :class="score()>3?'fa-check-circle-o is-active':'fa-times-circle'"></i>
              </span>

				<!--resultTitleBlock-->
				<h2 class="title">
					You did {{ (score()>7?'an amazing':(score()<4?'a poor':'a good')) }} job!
				</h2>
				<p class="subtitle">
					Total score: {{ score() }} / {{ quiz.questions.length }}
				</p>
					<br>
					<a class="button" @click="restart()">restart <i class="fa fa-refresh"></i></a>
					
				<!--/resultTitleBlock-->
               
			</div>
			<!--/quizCompetedResult-->
           
		</transition>
         /* ?>
	</div>
	<!--/questionBox-->

	</div>
	
</div>	
*/?>
<div class="container  "  style="padding-bottom:0px">
  <h1><?php echo $page_heading; ?></h1>
  <p><?php echo $page_description; ?></p>
</div>
<?php if($our_expertise_banner['url']!='')
{
	?>
<div class="qui_back" style="background-image: url('<?php echo $our_expertise_banner['url']; ?>');background-size: cover;">	
	
	<div class="container">

	<!--questionBox-->
	
	
	<?php
	if($question_answer_section_enable==1)
	{
	echo '<div class="questionBox" id="app" >';
	if($_GET['msg']=='thankyou')
	{
	?>
	<div class="questionContainer Qactive ">
	<h2 class="titleContainer title"><?php echo $answer_thankyoumessage; ?></h2>
	</div>
	<?
	}
    else
	{	
	?>
	<form action="/our-expertise-in-Employer-Branding/?msg=thankyou" method="post" class="wpcf7-form " novalidate="novalidate">
	<?php
	$postsQ = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'expertise_question', 	
            'post_status' => 'publish',
            'orderby'  => 'menu_order',
            'order'	=> 'ASC'			
    ));
	$kflag=0;
	foreach($postsQ as $postQ)
	{

	$active='';
	
	if($kflag<5)
	{
    if($kflag==0){ $active='Qactive';}	
		$kflag++;
	$ansertype1="answer_attempt(".$kflag.",'no')";
	$ansertype2="answer_attempt(".$kflag.",'yes')";
	$expertise_question = get_field('expertise_question', $postQ->ID);
	echo '<div class="questionContainer questioarea'.$kflag.' '.$active.'">
	<h2 class="titleContainer title">'.$expertise_question.' </h2> <footer class="questionFooter"><nav role="navigation" aria-label="pagination" class="pagination"><a class="button" onclick="'.$ansertype1.'"> N</a><a class="button" onclick="'.$ansertype2.'"> Y
    </a></nav></footer>
	
	</div>';
   	}
	   }
	?>

	<div class="questionContainer questioarea6 ">
	<h2 class="titleContainer title">
    
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="431">
<input type="hidden" name="_wpcf7_version" value="5.1.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f431-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
<input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text phone" id="phone" aria-invalid="false" placeholder="phone" required>
<span class="wpcf7-form-control-wrap answer1"><input type="hidden" name="answer1"  size="40" class="wpcf7-form-control wpcf7-text " id="answer1" aria-invalid="false"></span>
<span class="wpcf7-form-control-wrap answer2"><input type="hidden" name="answer2" value="" size="40" class="wpcf7-form-control wpcf7-text hidden" id="answer2" aria-invalid="false"></span>
<span class="wpcf7-form-control-wrap answer3"><input type="hidden" name="answer3" value="" size="40" class="wpcf7-form-control wpcf7-text hidden" id="answer3" aria-invalid="false"></span>
<span class="wpcf7-form-control-wrap answer4"><input type="hidden" name="answer4" value="" size="40" class="wpcf7-form-control wpcf7-text hidden" id="answer4" aria-invalid="false"></span>
<span class="wpcf7-form-control-wrap answer5"><input type="hidden" name="answer5" value="" size="40" class="wpcf7-form-control wpcf7-text hidden" id="answer5" aria-invalid="false"></span>
<input type="button" value="Submit" class="wpcf7-form-control wpcf7-submit submit_btn" onclick="checkPhone()"></p>

	</h2> 
	</form>
	<?php
	}
	echo '</div>';
	}
	else
	{
    echo '<div class="questionBox" id="app" style="background:none;"></div>';		
	}
	?>
	
	
<?php 
	
/*
		<!-- transition -->
		<transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">

			<!--qusetionContainer-->
			<div class="questionContainer" v-if="questionIndex<quiz.questions.length" v-bind:key="questionIndex">

				 

				<!-- questionTitle -->
				<h2 class="titleContainer title">{{ quiz.questions[questionIndex].text }}</h2>

				 

				<!--quizFooter: navigation and progress-->
				<footer class="questionFooter">

					<!--pagination-->
					<nav class="pagination" role="navigation" aria-label="pagination">
                           <!-- next button -->
						<a class="button" :class="(userResponses[questionIndex]==null)?'':'is-active'" v-on:click="next();" :disabled="questionIndex>=quiz.questions.length">
                    {{ (userResponses[questionIndex]==null)?'N':'Next' }}
                  </a>

						 
						<!-- next button -->
						<a class="button" :class="(userResponses[questionIndex]==null)?'':'is-active'" v-on:click="next();" :disabled="questionIndex>=quiz.questions.length">
                    {{ (userResponses[questionIndex]==null)?'Y':'Next' }}
                  </a>

					</nav>
					<!--/pagination--> 
				</footer>
				<!--/quizFooter-->

			</div>
			<!--/questionContainer-->

			<!--quizCompletedResult-->
			<div v-if="questionIndex >= quiz.questions.length" v-bind:key="questionIndex" class="quizCompleted has-text-centered">
                
				<!-- quizCompletedIcon: Achievement Icon -->
				<span class="icon">
                <i class="fa" :class="score()>3?'fa-check-circle-o is-active':'fa-times-circle'"></i>
              </span>

				<!--resultTitleBlock-->
				<h2 class="title">
					You did {{ (score()>7?'an amazing':(score()<4?'a poor':'a good')) }} job!
				</h2>
				<p class="subtitle">
					Total score: {{ score() }} / {{ quiz.questions.length }}
				</p>
					<br>
					<a class="button" @click="restart()">restart <i class="fa fa-refresh"></i></a>
					
				<!--/resultTitleBlock-->
               
			</div>
			<!--/quizCompetedResult-->
           
		</transition>
          */ ?>
	</div> 
	<!--/questionBox-->

	</div>
	
</div>	
<div class="clearfix"></div>
<?php
}
?>
	


<!--<div class="container ">-->
<!--  <div class="spo"> -->
<!-- <p>If you have more than two NOs, then it’s time for you to invest in building your employer brand. -->
<!--Our brand consultants can empower you to drive your brand perception in the right direction. A brand with a strong market positioning appeals to insiders and outsiders alike. -->

<!--</p> -->
<!--  </div>-->
  <!--<div class="clearfix"></div>	-->
  <div class="container expertise-heading" style="padding-top:0px">

        <div class="row">
            <div class="col-md-8 col-sm-12">
  <div class="space_top_10"></div>	
  <h1><?php echo $expertise_in_heading; ?> </h1>
  <div class="high">
    <p><?php echo $expertise_1; ?></p>
    <p><?php echo $expertise_2; ?></p>
    <p><?php echo $expertise_3; ?></p>
    <p><?php echo $expertise_4; ?></p>
  </div>
  <div class="spo" hidden>
                    <p>Creating a strong employer brand is not only useful, it’s necessary. But how is it relevant for your business? Take the quiz to find out.</p>
                </div>
				
                
				<?php
				if($what_we_do!='')
				{
				echo '<div class="">';	
				echo $what_we_do;
				echo " </div>";
				}
				
				?>
                   
               
            </div>
        </div>

    </div>
 
</div> 
<div class="bg_black service_section">
  <div class="container ">
	  
	<div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="spo">
                        <h1><?php echo $our_services_main_heading; ?> </h1>
                        <p><?php echo $our_services_main_description; ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="padding: 0;">
                <div class="row">
                    <div class="col-md-5">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <img  src="<?php echo $our_services['employer_branding_icon']['url']; ?>"  alt="<?php echo $our_services['employer_branding_icon']['alt']; ?>"  title="<?php echo $our_services['employer_branding_icon']['title']; ?>">
                                <div class="tab-text">
                                    <h3><?php echo $our_services['employer_branding_title']; ?></h3>
                                    <span><?php echo $our_services['employer_branding_description']; ?></span>
                                </div>

                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <img src="<?php echo $our_services['digital_recruitment_icon']['url']; ?>"  alt="<?php echo $our_services['digital_recruitment_icon']['alt']; ?>"  title="<?php echo $our_services['digital_recruitment_icon']['title']; ?>" >
                                <div class="tab-text">
                                    <h3><?php echo $our_services['digital_recruitment_title']; ?></h3>
                                    <span><?php echo $our_services['digital_recruitment_description']; ?></span>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <img src="<?php echo $our_services['events_icon']['url']; ?>"  alt="<?php echo $our_services['events_icon']['alt']; ?>"  title="<?php echo $our_services['events_icon']['title']; ?>">
                                <div class="tab-text">
                                    <h3><?php echo $our_services['events_title']; ?></h3>
                                    <span><?php echo $our_services['events_description']; ?></span>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                               <img src="<?php echo $our_services['employee_branding_icon']['url']; ?>" alt="<?php echo $our_services['employee_branding_icon']['alt']; ?>"  title="<?php echo $our_services['employee_branding_icon']['title']; ?>">
                                <div class="tab-text">
                                    <h3><?php echo $our_services['employee_branding_title']; ?></h3>
                                    <span><?php echo $our_services['employee_branding_description']; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade in  active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                
								<?php echo $our_services['employer_branding_tab_description']; ?>
                            </div>
                            <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                               <?php echo $our_services['digital_recruitment_tab_description']; ?> 
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                              <?php echo $our_services['events_tab_description']; ?>  
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							 <?php echo $our_services['employee_branding_tab_description']; ?>  
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
  </div>
</div> 	
<div class="clearfix"></div>

<div class="container text-center" id="careers_form">
  <h1><?php echo $caption; ?></h1> 
	<div class="cta_btn"> <a href="connect-with-us/#careers_form">Connect with us</a> </div>	

</div>
<div class="clearfix"></div>
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
var countflag=1;
function answer_attempt(questionnumber,answerValue)
{
var currentarea=".questioarea"+questionnumber;
var answer="#answer"+questionnumber;
$(answer).val(answerValue);
questionnumber=questionnumber+1;
var nextarea=".questioarea"+questionnumber;

$(currentarea).removeClass("Qactive");	
$(nextarea).addClass("Qactive");
}
function checkPhone()
{
phone=$("#phone").val();
if(phone!='')
{
$('.wpcf7-form').submit();	
}
else
{
$("#phone").css("border","22px solid red");	
}
return false;	
}
$( document ).ready(function() {
    

$(".nav-link ").on("click", function(){
   $(".nav-link").removeClass("active");
   $(this).addClass("active");
});
});
</script> 




<div class="clearfix"></div>
<?php get_footer(); ?>