<?php
/*
Template Name: Full Page
*/
?>
<?php get_header(); ?>
<div class="maxpg">
<div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="page-header" class="row">    
      <div class="col-sm-8">
        <h1><?php the_title(); ?></h1>
      </div>
        <div class="col-sm-4 flush">
            <div class="pg-header-img-wrap flush hidden-xs">
                <img class="page-header-img" src="<?php echo $src[0]; ?>"/>
            </div>
      </div>
    </div>
      
<div class="row">  
<div id="page-content" class="col-sm-12">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php 
        global $more;
        $more = 1; 
    ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
      


          </div>
  </div>
</div>
</div>
  <?php get_footer() ?>