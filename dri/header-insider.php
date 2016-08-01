<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,700,700i|Alegreya+Sans+SC:300,400,500|Poppins:700,600,300|Alegreya+Sans:300,300i,400,700,700i' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
// jQuery(window).load(function() {
// 	jQuery("#loader-wrapper").fadeOut("slow");
// 	setTimeout(function(){
// 		// Hide the address bar!
// 		window.scrollTo(0, 1);
// 	}, 0);
// });

// var he = $( window ).height();
// jQuery( document ).ready(function() {
// 	jQuery('.home #head').css('height' , he);
// 	//jQuery('main').css('margin-top' , he);
// });
jQuery(window).load(function() {
  jQuery("#loader-wrapper").fadeOut("slow");
});

// var he = $( window ).height();
// jQuery( document ).ready(function() {
//   jQuery('.home #head').css('height' , he);
//   //jQuery('main').css('margin-top' , he);
// });

</script>

<script>
 /*  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47467115-8', 'auto');
  ga('send', 'pageview');
 */
</script>


 
</head>

<body <?php body_class()?>>

<div id="fb-root"></div>

<div id="loader-wrapper">
   <i class="fa fa-circle-o-notch fa-spin"></i>
</div>

<nav class="navbar navbar-fixed-top insider-nav" role="navigation">
    <div class="container">
        <div class="row">

          <div class="navbar col-md-10 col-md-offset-1 col-xs-12 liner-bottom">

              <div class="navbar-header">
                <a class="navbar-brand" href="<?php bloginfo('url')?>" title="Del Río Izquierdo Abogados" rel="nofollow">
                  <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_blue.png" alt="Logo Del Río Izquierdo" />
                </a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse">
                  <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav navbar-right' , 'theme_location' => 'primary' ) ); ?>
              </div><!--/.nav-collapse -->

          </div>    
        </div>
    </div>
</nav>
