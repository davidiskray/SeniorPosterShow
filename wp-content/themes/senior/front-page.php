<?php get_header(); ?>

	<div id="home" class="panel home">
		<div class="panel-content">
		<div class="news">
		<?php $custom_query = new WP_Query('category_name=home');
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</div>

		<?php endwhile; ?>
		</div>
		<div class="cal"><?php echo do_shortcode( '[google-calendar-events id="1" type="ajax"]' ); ?></div>
		</div>
	</div>

	<div id="social" class="panel social">
		<section class="socialwrap"
		<div id="brick" class="masonry">
		<?php $custom_query = new WP_Query('posts_per_page=-1&category_name=social');
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item"><h1><?php the_title(); ?><?php the_post_thumbnail(); ?></h1>
		<?php the_content(); ?>
		</article>

		<?php endwhile; ?>
		</div>
		</section>
	</div>

	<div id="forum" class="panel forum">
		<div class="panel-content">
			<?php echo do_shortcode('[bbp-forum-index]');?>
			<?php echo do_shortcode('[bbp-topic-index]');?>
		
		</div>
	</div>
	
		
<?php get_footer(); ?>
