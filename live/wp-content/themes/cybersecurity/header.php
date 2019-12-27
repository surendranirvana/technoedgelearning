<!doctype html>
<html lang="en">
<head>
<title>
        <?php
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description"; 
        ?>
    </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">

<!--Theme Color appearing on Touch Browser-->
<meta name="theme-color" content="#005188" />
<!--Theme Color appearing on Touch Browser-->

<!--Favicon starts-->
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
<!--Favicon ends-->

<!--fonts starts font-family: 'Montserrat', sans-serif; -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

<!--fonts ends-->
<!--styesheet starts-->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css"/>

<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154578934-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154578934-1');
</script>

</head>
<body <?php body_class(); ?>>
 <header> 
  <!--logo wrap starts-->
  <div class="logo-wrap">
    <div class="container">
      <div class="content"> 
        <!--logo starts-->
        <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('header_logo'); ?>"  alt="<?php bloginfo('name')?>"> </a></div>
        <!--logo ends--> 
        <!--top right starts-->
        <div class="top-right-content"> 
          
          <!--nav wrap starts--> 
         
          <!--nav wrap ends-->
          <p class="enquireNow"><a href="<?php bloginfo('url')?>/courses/" class="btn">Register Today</a> </p>
          <!--nav trigger--> 
          <span class="nav-trigger"><i class="fal fa-bars"></i></span> 
          <!--nav trigger ends-->
          <div class="nav-wrap">
            <nav id="push_sidebar">
               <?php wp_nav_menu( array(
                    'container' => false,
                    'theme_location'  => 'primary',   
                    'items_wrap'      => '<ul class="nav">%3$s</ul>'
                  ) ); ?>
            </nav>
          </div>
        </div>
        <!--top right ends--> 
      </div>
    </div>
  </div>
  <!--logo wrap ends--> 
  
</header>
  <!--header ends-->