<?php
/**
 * Plugin Name:       Bpl Custom Block Party
 * Description:       Custom tools to enhance the Block Party experience.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * License:           GPL-2.0-or-later
 * Author:            Barbra Lashbrook
 * Text Domain:       bpl-custom-block-party
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function create_block_bpl_custom_block_party_block_init() {

	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}

	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
add_action( 'init', 'create_block_bpl_custom_block_party_block_init' );
function enqueue_block_script() {
   wp_enqueue_script(
    'js_bootstrap_admin', 
    plugin_dir_url( __FILE__ ).'src/compare-img-block/js/compare.js',
    array('wp-blocks', 'wp-element', 'wp-editor'),
    1,
    true
    );
   wp_enqueue_script(
    'compare-img-block-edit',
    plugins_url('src/compare-img-block/edit.js', __FILE__),
    array('wp-blocks', 'wp-element', 'wp-editor'),
    1,
    true
);
wp_localize_script(
    'compare-img-block-edit',
    'compareImgBlock',
    array(
        'pluginUrl' => plugins_url('src/compare-img-block', __FILE__)
    )
);

}
add_action( 'enqueue_block_assets', 'enqueue_block_script' );
function frontend_scripts() {
    wp_enqueue_script(
        'js_bootstrap', 
        plugin_dir_url( __FILE__ ).'src/compare-img-block/js/compare.js',
        array('wp-blocks', 'wp-element', 'wp-editor'),
        1,
        true
    );
    
}
add_action( 'wp_enqueue_scripts', 'frontend_scripts' );
