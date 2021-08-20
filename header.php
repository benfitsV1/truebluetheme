<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$website_logo=get_field('website_logo', 213);
$page_name = basename(get_permalink());

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/fav.gif" type="images/gif" sizes="16x16">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/tab.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri() ?>/css/qui.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.3.8/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">		
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/font-awesome-4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
<link rel="stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">	
<style>
       
         .component__slider{
            float: left;
            position: relative;
            width: 100%;
            height: auto;
            padding-top: 50px;
            padding-bottom: 50px;
            background: #380089;
        }

        .swiper-container-wrapper {
            height: auto;
        }

        .swiper-container{
            overflow: visible;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            width: 100%;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             -webkit-justify-content: center;
            justify-content: center;
             -webkit-box-align: center;
             -ms-flex-align: center;
             -webkit-align-items: center;
            align-items: center;
            transition: margin 300ms linear, transform 300ms linear;
        }

        .swiper-slide:before {
            content: '';
            display: table;
            padding-top: 100%;
        }

        .swiper-nav .prev {
            border: 2px solid #a100ff;
        }

        .swiper-nav .prev:hover, .swiper-nav .next:hover{
            border: 2px solid #ffffff;
        }

        .swiper-nav .prev:hover::before{
            color: #ffffff;
        }

        .swiper-button-disabled {
            opacity: 0.4;
            border: 2px solid #a100ff;
        }

        .swiper-nav. .prev.swiper-button-disabled:hover, .swiper-nav .next.swiper-button-disabled:hover{
            border: 2px solid #a100ff;
        }

        .swiper-nav .next:hover::before {
            color: #ffffff;
        }

        .swiper-nav .prev:before {
            color: #a100ff;
        }

        .swiper-nav .next {
            border: 2px solid #a100ff;
        }

        .swiper-nav .next:before {
            color: #a100ff;
        }

        .nav-tabs {
            *zoom: 1;
        }

        .nav-tabs:before,
        .nav-tabs:after {
            display: table;
            line-height: 0;
            content: "";
        }

        .nav-tabs:after {
            clear: both;
        }

        .nav-tabs > li {
            float: left;
            position: relative;
        }

        .nav-tabs > li > a{
            padding-right: 12px;
            margin-right: 2px;
        }

        .nav-tabs > li > a:hover{
            opacity: 0.3;
        }

        .nav-tabs > li {
            margin-bottom: -1px;
        }

        .nav-tabs > li > a {
            padding-top: 8px;
            padding-bottom: 8px;
            line-height: 20px;
        }

        .nav-tabs > .active > a,
        .nav-tabs > .active > a:hover,
        .nav-tabs > .active > a:focus {
            color: #a100ff;
            cursor: pointer;
            border-bottom-color: transparent;
        }

        .tab-content {
            float: left;
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-bottom: 30px;
        }

        .tab-content > .tab-pane{
            visibility: hidden;
            height: 0;
        }

        .tab-content > .active{
            visibility: visible;
            height: auto;
        }


        .nav__container {
            display: block;
            float: left;
            position: relative;
            width: 100%;
            background: red;
        }

        .nav-tabs {
            display: block;
            position: relative;
            width: 700px;
            list-style: none;
            padding-left: 0;
        }

        .nav-tabs li a {
            color: #ffffff;
            text-decoration:  none;
            padding-right: 20px;
        }

        .nav-tabs li:first-child:after {
            display: none;
        }

        .nav-tabs li:after{
            display: block;
            position: absolute;
            top: 4px;
            left: -12px;
            content: "";
            height: 12px;
            width: 2px;
            background: #ffffff;
        }

        @media (max-width: 698px) {
            .nav-tabs, .nav-tabs li {
                width: 100%;
                text-align: center;
                margin: 0;
            }

            .nav-tabs li:first-child{
                margin-top: 10px;
            }

            .nav-tabs li{
                padding-top: 8px;
                padding-bottom: 8px;
            }
            .nav-tabs li:last-of-type{;
                padding-bottom: 0;
            }

            .nav-tabs li:after{
                left: 50%;
                top: 0px;
                transform: translate(-50%,-50%);
                content: "";
                height: 2px;
                width: 30px;
                background: #ffffff;
            }
            .nav-tabs li a {
                padding-right: 0;
            }

        }


    </style>	
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172999810-1');
</script>

</head>

<body <?php body_class(); ?>>	
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="/"> <!-- Generator: Adobe Illustrator 23.0.0, SVG Export Plug-In  -->
      <img src="<?php echo $website_logo['url']; ?>" class="img-responsive" alt="Trueblue advisory, Employer branding consultancy logo" title="Trueblue advisory, Employer branding consultancy logo ">
      </a> </div>
    <div id="navbar" class="collapse navbar-collapse">
    <?php
         echo do_shortcode('[Site_Menu]');  ?>
    </div>
    <!--/.nav-collapse --> 
  </div>
</nav>


