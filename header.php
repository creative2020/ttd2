<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>
    
</head>
<body>
<div class="container-fluid">

<div class="row">
    <div id="top" class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="logo col-xs-12 col-sm-12">
                <a href="/"><img class="center-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tran-thomas-design-kc.png" class="" width="250px"></a>
            <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a>
        </div>
            <h2 class="phone-m col-xs-12 visible-xs-block text-center"><i class="fa fa-phone"></i> 123-456-7890</h2>
    </div>
</div>         
    
<div class="row">
    <div id="navbar" class="col-sm-12 col-sm-offset-0">
        
                        
                       
						<?php wp_nav_menu( array(
                'menu'              => 'TT Main',
                'theme_location'    => 'tt-main',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
            
                        
    </div>
</div>
    
<!--    nav-->

<div class="row">
					
					</div>
    
    
    
    
<!--header-->
