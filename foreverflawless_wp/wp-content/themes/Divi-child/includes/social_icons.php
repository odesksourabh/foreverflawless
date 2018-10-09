<ul class="et-social-icons">
<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon"><a target="_blank" href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_instagram_icon', 'on' ) ) : ?>
	<li class="et-social-icon"><a target="_blank" href="<?php echo esc_url( et_get_option( 'divi_instagram_url', '#' ) ); ?>"><i class="fa fa-instagram"></i></a></li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon"><a target="_blank" href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>"><i class="fa fa-twitter"></i></a></li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_youtube_icon', 'on' ) ) : ?>
	<li class="et-social-icon"><a target="_blank" href="<?php echo esc_url( et_get_option( 'divi_youtube_url', '#' ) ); ?>"><i class="fa fa-youtube"></i></a></li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
	<li class="et-social-icon"><a target="_blank" href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
<?php endif; ?>

<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
</ul>
