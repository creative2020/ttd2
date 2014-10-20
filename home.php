<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row">
    <div id="callout" class="col-sm-10 col-sm-offset-1 flush">
        <h3 class="hp-message">Callout home page message goes here.</h3>
    </div>
</div> <!--row-->

<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="row col-sm-12">
            <div id="home-feed">
                <?php echo do_shortcode('[tt_posts limit="6" cat_name="home"]'); ?>
            </div>
        </div>
        </div>    
   
        <div id="sidebar" class="col-xs-12 col-sm-4">
            
            <p><a href="/portfolio/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery.png" class="" width="100%"></a></p>
            
            
            
            <?php get_template_part( 'section', 'about-us' ); ?>
            
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
    </div><!--row-->



  <?php get_footer() ?>
