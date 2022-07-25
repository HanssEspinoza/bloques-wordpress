<?php

add_action( 'init', 'intmun_banner_blocks' );

function intmun_banner_blocks() {
    $assets_file = include_once INTMUN_PATH . '/blocks/banner/build/index.asset.php';

    wp_register_script(
        'intmun-banner-block',
        plugins_url( './build/index.js', __FILE__ ),
		$assets_file['dependencies'],
		$assets_file['version']
    );

    register_block_type(
        'intmun/banner',
        array(
            'editor-script' => 'intmun-banner-block'
        )
    );
}