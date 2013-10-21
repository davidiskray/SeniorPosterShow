<?php get_header(); ?>

		<section>

			<?php
 
				/*
				*  View array data (for debugging)
				*/
				 
				/* var_dump( get_field('home-img') ); */
				 
				/*
				*  Create the Markup for a slider
				*  This example will create the Markup for Flexslider (http://www.woothemes.com/flexslider/)
				*/
				 
				$images = get_field('home-img');
				 
					if( $images ): ?>
					    <div id="slider" class="flexslider">
					        <ul class="slides">
					            <?php foreach( $images as $image ): ?>
					                <li id="burg">
					                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </li>
					            <?php endforeach; ?>
					        </ul>
					    </div>
					<?php endif; 

				 	
				?>



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
<?php
if ( is_page() ) :
	get_footer( 'home' );
else :
	get_footer();
endif;
?>
				