
<?php get_header(); ?>
<div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    
      
<div class="row">  
<div id="page-content" class="col-sm-8">
       
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php 
        global $more;
        $more = 1; 
    ?>
    <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
      
  <div id="sidebar" class="col-xs-12 col-sm-4">
            
            <?php get_template_part( 'section', 'about-us' ); ?>
            
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
  </div>
  </div>
</div>
  <?php get_footer() ?>