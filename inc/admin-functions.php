<?php

add_action( 'admin_menu', 'ayukul_add_admin_page' );

function ayukul_add_admin_page() {
	$hook_suffix = add_menu_page( __( 'WFM Theme Options', 'ayukul' ), __( 'WFMTheme', 'ayukul' ), 'manage_options', 'ayukul-options', 'ayukul_create_page', get_template_directory_uri() . '/assets/img/moon.png' );

	add_action( "admin_print_scripts-{$hook_suffix}", 'ayukul_admin_scripts' );
	add_action( 'admin_init', 'ayukul_custom_settings' );
}

function ayukul_custom_settings() {
register_setting( 'ayukul_general_group', 'main_post' );
	register_setting( 'ayukul_general_group', 'main_post_cnt', function ( $input ) {
		$input = abs( (int) $input );

		return ( $input < 5 ) ? $input : 4;
	} );

	register_setting( 'ayukul_general_group', 'author_avatar' );

	add_settings_section( 'ayukul_general_section', __( 'Home page settings', 'ayukul' ), '', 'ayukul-options' );

	add_settings_field( 'main_post', __( 'Home article', 'ayukul' ), 'ayukul_general_main_post', 'ayukul-options', 'ayukul_general_section' );
	add_settings_field( 'main_post_cnt', __( 'Number of featured posts', 'ayukul' ), 'ayukul_general_main_post_cnt', 'ayukul-options', 'ayukul_general_section', array( 'label_for' => 'main_post_cnt' ) );
	add_settings_field( 'author_avatar', __( 'Author avatar', 'ayukul' ), 'ayukul_general_author_avatar', 'ayukul-options', 'ayukul_general_section' );
}

function ayukul_general_author_avatar() {
	$image_id = get_option( 'author_avatar' );

	if( $image = wp_get_attachment_image_src( $image_id ) ) {

		echo '<a href="#" class="ayukul-upl"><img src="' . $image[0] . '" /></a>
	      <a href="#" class="ayukul-rmv">Remove image</a>
	      <input type="hidden" name="author_avatar" value="' . $image_id . '">';

	} else {

		echo '<a href="#" class="ayukul-upl">Upload image</a>
	      <a href="#" class="ayukul-rmv" style="display:none">Remove image</a>
	      <input type="hidden" name="author_avatar" value="">';

	}
}

function ayukul_general_main_post_cnt() {
	$main_post_cnt = abs( (int) get_option( 'main_post_cnt' ) );
	echo '<input type="number" min="0" max="4" name="main_post_cnt" class="regular-text" id="main_post_cnt" value="' . $main_post_cnt . '">';
}

function ayukul_general_main_post() {
$main_post_id = esc_attr( get_option( 'main_post' ) );

	if ( $main_post_id ) {
		$main_post = get_post( $main_post_id );
	}
	$main_post_title = ! empty( $main_post ) ? $main_post->post_title : '';

	echo '<input type="text" id="main_post" class="regular-text">';

	echo '<p class="description" id="main_post_title">';
	if ( $main_post_title ) {
		echo '<strong>' . __( 'Post selected: ', 'ayukul' ) . '</strong>' . $main_post_title . ' <button class="button delete-main-post"><span class="dashicons dashicons-trash"></span></button>';
	}
	echo '</p>';

	echo '<input type="hidden" id="main_post_id" name="main_post" value="' . $main_post_id . '">';
}

function ayukul_create_page() {
	require get_template_directory() . '/inc/templates/ayukul-options.php';
}

function ayukul_admin_scripts() {
	wp_enqueue_style( 'ayukul-jquery-ui-style', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/themes/base/jquery-ui.css' );
	wp_enqueue_style( 'ayukul-main-style', get_template_directory_uri() . '/assets/css/admin-main.css' );

 	// avatar
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}

	wp_register_script( 'ayukul-main-js', get_template_directory_uri() . '/assets/js/admin-main.js', array(
		'jquery',
		'jquery-ui-autocomplete'
	), false, true );
	wp_localize_script( 'ayukul-main-js', 'ayukulObject', array(
		'nonce' => wp_create_nonce('ayukul-nonce'),
		'post_selected' => __( 'Post selected: ', 'ayukul' )
	) );
	wp_enqueue_script( 'ayukul-main-js' );
}

/**
 * AJAX functions
 */
add_action( 'wp_ajax_main_post_action', function () {
	check_ajax_referer( 'ayukul-nonce' );

	$main_post_s = $_GET['term'];

	$main_posts = get_posts( array(
		's'              => $main_post_s,
		'posts_per_page' => 10,
	) );

	$result = [];
	if ( $main_posts ) {
		foreach ( $main_posts as $main_post ) {
			$res['label'] = $main_post->post_title;
			$res['id'] = $main_post->ID;
			$result[] = $res;
		}
	}

	echo json_encode( $result );
	wp_die();

} );
