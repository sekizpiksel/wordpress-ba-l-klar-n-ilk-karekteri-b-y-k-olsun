<?php
/*
Plugin Name: Başlıklar Büyük Harf Olsun
Description: Gutenberg editöründe başlık alanına yazılan her kelimenin ilk harfini otomatik olarak büyük harf yapar.
Version: 1.0
Author: sekizpiksel
*/

// Gutenberg editörü için script ekleyin
function bbho_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'bbho-gutenberg-capitalize-titles',
        plugin_dir_url(__FILE__) . 'basliklar-buyuk-harf-olsun.js',
        array('wp-blocks', 'wp-dom'),
        filemtime(plugin_dir_path(__FILE__) . 'basliklar-buyuk-harf-olsun.js'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'bbho_enqueue_block_editor_assets');

?>
