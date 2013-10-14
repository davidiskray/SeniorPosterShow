		</div> <!-- End .content-wrapper -->
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> Company Name.</p>
		</footer>

	</div> <!-- Close .wrapper !-->

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>

<?php wp_footer(); ?><!-- required don't remove -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/masonry.min.js"></script>

<script type="text/javascript">
	window.onload = function() {
 		 var wall = new Masonry( document.getElementById('brick'), {
 		 	columnWidth: 236,
    		gutterWidth: 30,
    		isFitWidth: true
 		 });
	}; 
</script>

</body>
</html>
