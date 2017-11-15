<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $call = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'> 
	</head>
	<body>
 <body id="bg">
	<div class="page-wraper">     	
        <!-- HEADER START -->
        <header class="site-header header-style-1 ">
        	<!-- TOP BAR START -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li><a href="<?php echo $facebook; ?>" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo $facebook; ?>" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo $instagram; ?>" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i><?php echo $email; ?></li>
                                <li><i class="fa fa-phone"></i><?php echo $call; ?></li>
                            </ul>
                            <?php
					if(is_active_sidebar('header')){
					dynamic_sidebar('header');
					}
					?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN BAR START -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-primary">
                    <div class="container">
                    	<!-- SITE LOGO -->
                        <div class="logo-header mostion header-skew">
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php echo $logo; ?>" width="230" height="67" alt="" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="site-search">
                            <form action="#">
                                <div class="input-group">
                                    <input name="site-search" type="text" class="form-control" placeholder="Type to search">
                                    <span class="input-group-btn">
                                        <button type="button" class="site-button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- MAIN NAV -->
                        <div class="header-nav navbar-collapse collapse ">
							<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo '<ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="#">الرئيسية</a>
                                </li>
                                <li>
                                    <a href="#about">عن الشركة</a>
                                </li>
                                <li>
                                    <a href="#">منتجاتنا</a>  
                                </li>    
                                <li class="submenu-direction">
                                    <a href="#">اتصل بنا</a>
                                   
                                </li>
                            </ul>'; 
						}elseif($lang == 'en'){
						echo '<ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#about">About us</a>
                                </li>
                                <li>
                                    <a href="#">Product</a>  
                                </li>    
                                <li class="submenu-direction">
                                    <a href="#">Contact us</a>
                                   
                                </li>
                            </ul>'; 
					};
				  	?> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->