<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Post Feed

add_shortcode( 'tt_posts', 'tt_posts' ); // echo do_shortcode('[tt_posts limit="-1" cat_name="home"]');
function tt_posts ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat,
    'size' => 'full',
    //'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        $attachment_id = get_post_thumbnail_id( $post_id );
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        $size = 'medium';
        $img_src = wp_get_attachment_image_src( $attachment_id, $size, $icon );
//        if (empty( $image )) {
//            $image = '<img src="/wp-content/themes/math/images/img-fpo.png">';
//        } //use for fall back image
        global $more;
        $more = 0;
        $content = apply_filters( 'the_content', get_the_content() );
        $content = str_replace( ']]>', ']]&gt;', $content );
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><div class="list-wrap"><div class="list-img col-xs-12 col-sm-4">';  
    $output .= '<img src="'.$img_src[0].'"/>'. 
                '</div>'.
                '<div class="row col-xs-12 col-sm-12">'. 
                    '<h2>'. $post->post_title .'</h2></a>'.
                    '<p>'. $content .'</p>'.
                '</div>'.
                '<div class="clearfix"></div></div>';


	}
} else {
	// no posts found
	echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT horizontal line

add_shortcode( 'tt_hline', 'tt_hline' );
function tt_hline ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
        
// code
return '<div class="tt-hline">'.$content.'</div>';    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Social Media

add_shortcode( 'tt_social_media', 'tt_social_media' );
function tt_social_media ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
// code
return '<div id="social-media-icons">'.
            '<a href="https://www.facebook.com/pages/Tran-Thomas-Design-Studio/227747890613984"><i class="fa fa-facebook-square"></i></a>'.
            '<a href="#"><i class="fa fa-pinterest-square"></i></a>'.
        '</div>'.
        do_shortcode('[tt_hline]');    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Portfolio

add_shortcode( 'tt_portfolio', 'tt_portfolio' );
function tt_portfolio ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'text' => '',
            'img' => '2041',
            'size' => 'small',
            'icon' => '',
            'link' => '#link',
		), $atts )
	);
    
    $img_url = wp_get_attachment_image_src( $img, $size, $icon );
    
// code
return '<a href="'.$link.'">'.
            '<div class="row">'.
                    '<div class="col-sm-12">'.
                    '<div class="tt-gallery-wrap">'.
                    '<div class="tt-gallery-left col-sm-4 flush">'.
                        '<img src="'.$img_url[0].'" class="img-responsive"/>'.
                    '</div>'. // col
                    '<div class="tt-gallery-right col-sm-8">'.
                        '<h2>'.$name.'</h2>'.
                        '<p class="tt-gallery-text">'.$text.'</p>'.
                    '</div>'. // col
                    '</div>'. // wrap
                    '</div>'. // col 12
            '</div>'. // row
        '</a>'; //a
}

////////////////////////////////////////////////////////