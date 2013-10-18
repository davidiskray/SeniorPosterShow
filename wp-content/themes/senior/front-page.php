<?php get_header(); ?>

		<section>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- start loop -->
				<article>
					<?php $images = get_field('home-img');
						if( $images ): ?>
							<div class="bg">
								<?php foreach( $images as $image ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
	
				</article>	
			<?php endwhile; endif; ?><!-- end loop -->
			<p>
				Thursday<br />
				21 November 2013
			</p>
			<p>
				ASU Old Main<br />
				400 E. Tyler Mall<br />
				Tempe, AZ 85281
			</p>
			<p>
				Doors Open: 5:30pm<br />
				Silent Auction: 6:00pm<br />
				Live Auction: 7:30pm
			</p>

			
		</section>
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
