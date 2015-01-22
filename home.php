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
    
    <div id="tt-slider" class="col-sm-10 col-sm-offset-1 flush pull-left">
        
        
        
        <!--TT Slider-->
        
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <a href="#"><div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-A1-bath.png" alt="...">
      <div class="carousel-caption">
          <div id="slider-tagline" class="col-sm-4 col-sm-offset-1 pull-right">
            Luxury from imagination
        </div>
          <h2></h2>
          <p></p>
    </div></a>
    </div>
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-A1-bath.png" alt="...">
      <div class="carousel-caption">
          <div id="slider-tagline" class="col-sm-4 col-sm-offset-1 pull-right">
            Bathed in elegance
        </div>
          <h2></h2>
          <p></p>
    </div>
    </div>
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-A1-bath.png" alt="...">
    <div class="carousel-caption">
          <div id="slider-tagline" class="col-sm-4 col-sm-offset-1 pull-right">
            Some other headline
        </div>
          <h2></h2>
          <p></p>
    </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        
        
<!--END TT Slider-->
    </div>
</div> <!--row-->
<div class="maxpg">
<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="row col-sm-12">
            <div id="home-feed">
                <?php echo do_shortcode('[tt_posts limit="6" cat_name="home"]'); ?>
            </div>
        </div>
        </div>    
   
        <div id="sidebar" class="col-xs-12 col-sm-4">
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
    </div><!--row-->
</div>


  <?php get_footer() ?>
