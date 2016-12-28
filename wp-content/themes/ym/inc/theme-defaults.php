<?php
/**
 * YM
 *
 * This file adds the default theme settings to the YM Theme.
 *
 * @package YM
 * @author  DevelopingDesigns
 * @link    https://www.developingdesigns.com/
 */


namespace DevDesigns\YM;


add_filter( 'genesis_theme_settings_defaults', __NAMESPACE__ . '\theme_defaults' );
/**
 * Updates theme settings on reset.
 *
 * @since 2.2.3
 *
 * @param $defaults
 *
 * @return mixed
 */
function theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 6;
	$defaults['content_archive']           = 'full';
	$defaults['content_archive_limit']     = 0;
	$defaults['content_archive_thumbnail'] = 0;
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}


add_action( 'after_switch_theme', __NAMESPACE__ . '\theme_setting_defaults' );
/**
* Updates theme settings on activation.
*
* @since 2.2.3
*/
function theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 6,
			'content_archive'           => 'full',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 0,
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );

	}

	update_option( 'posts_per_page', 6 );

}


/**
 * Register custom image sizes
 */
add_action( 'init', function () {
	add_image_size( 'featured-image', 720, 400, true );
} );

