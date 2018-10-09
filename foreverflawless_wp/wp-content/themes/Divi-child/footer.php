<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; 
			
				$footerlogo = ( $user_logo = et_get_option( 'divi_footer_logo' ) ) && '' != $user_logo
				? $user_logo
				: get_stylesheet_directory_uri() . '/images/footer_logo.png';

				ob_start();?>

				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_attr( $footerlogo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
							</a>
						</div>
					</div>
				</div>
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
					//echo '<div id="footer-bottom"><div class="container clearfix">';
					//echo et_get_footer_credits();
					//echo '</div></div>';
					?>
					<!-- .container -->
				
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->



	<?php wp_footer(); ?>

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script type="text/javascript">
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

</body>
</html>
