<?php

/**
Plugin Name: Post notice
Plugin URI: http://post-noti e.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from comment and trackback spam</strong>. It keeps your site protected from spam even while you sleep. To get started: 1) Click the "Activate" link to the left of this description, 2) <a href="http://akismet.com/get/">Sign up for an Akismet API key</a>, and 3) Go to your Akismet configuration page, and save your API key.
Version: 3.1.1
Author: Automattic
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

if(!defined('WPINC')){
	die;
}

require_once(plugin_dir_path(__FILE__) . 'class.post-notice.php');
require_once(plugin_dir_path(__FILE__) . 'class.post-editor.php');
require_once(plugin_dir_path(__FILE__) . 'class.post-notice-display.php');


function start_post_notice_plugin() {

	if(is_admin()) {
		$post_editor = new Post_Editor();

		$post_notice = new Post_Notice($post_editor);
		$post_notice->initialize();
	}
	else {
		$post_notice = new Post_Notice_Display();
	}

	$post_notice->initialize();

};

start_post_notice_plugin();