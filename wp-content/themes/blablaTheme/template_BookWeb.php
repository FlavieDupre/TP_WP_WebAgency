<?php
/**
*Template Name: template_BookWeb
*/

get_header();
?>
<img src=" <?php echo get_template_directory_uri(); ?>/images/realisations_webdesign_pao_graphisme.jpg" width="1140">

<?php
$args = array(
	'post_type' => 'BookWeb'
);

// The Query
$the_query = new WP_Query($args);

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

	<div id="theme"><h2 style="margin-bottom:0;"><a href="<?php the_permalink();?>" title="<?php the_field('titre_du_site');?>"><?php the_field('titre_du_site');?></a></h2><br/><p><img src="<?php the_field('image_du_site');?>" width="200"></p></div>
<?php
}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {

}

		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>