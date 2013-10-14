<?php
/*
Template Name: Jasonabout
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
		<section class="main">
		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- start loop -->

		
		
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>					
			<?php endwhile; endif; ?><!-- end loop -->
			
			
			
		</section>
		
		<div id="aboutface"></div>
		
		
		
<?php get_footer(); ?>
