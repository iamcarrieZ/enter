<?php

add_action( 'wp_loaded', 'wizhi_enter_settings' );
function wizhi_enter_settings() {

	$fields = [
		[
			'type'        => 'upload',
			'name'        => 'site_logo',
			'label'       => '网站 Logo',
			'size'        => '80',
			'placeholder' => '网站 Logo 需要多大就上传多大, 不要大也不要小。',
		],
	];

	$args_option = [
		'parent' => 'themes.php',
		'slug'  => 'wizhi-enter-settings',
		'label' => __( '主题设置', 'wizhi' ),
		'title' => __( '主题设置', 'wizhi' ),
	];

	if ( class_exists( 'WizhiOptionPage' ) ) {
		new WizhiOptionPage( $fields, $args_option );
	}
}