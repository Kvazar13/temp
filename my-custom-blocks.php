<?php/*Plugin Name: My Custom BlocksPlugin URI: https://www.example.com/my-custom-blocksDescription: This is a plugin that adds custom Gutenberg blocks.Version: 1.0Author: Your NameAuthor URI: https://www.example.com*/function my_plugin_enqueue_block_editor_assets() {    wp_enqueue_script(        'my-custom-blocks/faqs',        plugins_url( 'block.js', __FILE__ ),        array( 'wp-blocks', 'wp-element', 'wp-editor' ),        true    );}add_action( 'enqueue_block_editor_assets', 'my_plugin_enqueue_block_editor_assets' );function my_custom_blocks_categories( $categories, $post ) {    return array_merge(        $categories,        array(            array(                'slug' => 'my-custom-blocks',                'title' => __( 'My Custom Blocks', 'my-custom-blocks' ),            ),        )    );}add_filter( 'block_categories', 'my_custom_blocks_categories', 10, 2 );