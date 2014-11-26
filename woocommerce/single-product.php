<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

<div id="page-main" class="row">
    <div id="page-header" class="col-sm-10 col-sm-offset-1">
        <?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );

    ?>
      <div class="page-inside col-sm-12 flush">

      
<div id="page" class="row">
    
<div id="page-content" class="col-sm-8">
    
    <h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
	

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
          
   
    
    </div>
       <div id="sidebar" class="col-sm-4 flush">
        <div id="social-media-icons">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
        <?php dynamic_sidebar( 'tt-sidebar' ); ?>   

	

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
</div>
           
<?php get_footer( 'shop' ); ?>
           
</div>