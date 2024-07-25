<?php

/*
アイキャッチ画像を使用するための設定
*/
add_theme_support('post-thumbnails');


// テーマフォルダ ショートコード

function shortcode_templateurl()
{
	return get_template_directory_uri();
}
add_shortcode('theme-url', 'shortcode_templateurl');

function shortcode_url()
{
	return esc_url(home_url());
}
add_shortcode('url', 'shortcode_url');


// インクルード ショートコード

function my_php_Include($params = array())
{
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/$file.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


// ショートコード 一部許可

add_filter('wp_kses_allowed_html', 'set_wp_kses_allowed_html', 10, 2);

function set_wp_kses_allowed_html($tags, $context)
{
	$tags['link']['href'] = true;
	$tags['a']['href'] = true;
	$tags['script']['src'] = true;
	$tags['img']['src'] = true;
	$tags['img']['srcset'] = true;
	$tags['source']['src'] = true;
	$tags['form']['action'] = true;
	return $tags;
}


