<?php
/*The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package understrap
 */
$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_sidebar( 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info"><a href="mailto:timothy_liu@mymail.sutd.edu.sg">@tlkh</a></div>
				</footer><!--#colophon-->
			</div><!--col-->
		</div><!--row-->
	</div><!--container-->
</div><!--wrapper-->
</div><!--#page-->
<?php wp_footer(); ?>
</body>
</html>