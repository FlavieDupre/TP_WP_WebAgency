<?php get_header();?>

<div id="primary">
	<div id="content" role="main">
		<div id="monBookWeb">
		<?php while(have_posts()) : the_post();?>
			<h2><?php the_field('titre_du_site'); ?></h2>
			<p>
			<?php the_field('description_du_site'); ?></p>
			<p>
			<img src="<?php the_field('image_du_site'); ?>"></p>
			
		<?php endwhile; // end of the loop ?>
		</div>
	</div>
</div>
<?php get_footer();?>
