<?php

class Post_Notice {

	public function __construct(Post_Editor $editor) {
		$editor->initialize();
	}

	public function initialize() {
		add_action('admin_enqueue_scripts', array($this, 'enqueue_styles'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	public function enqueue_styles() {

		$screen = get_current_screen();
		if($screen->id != 'post'){
			return;
		}

		wp_enqueue_style(
			'post-notice-admin',
			plugins_url('post-notice/assets/styles/admin.css'),
			array(),
			'0.1.0'
		);
	}

	public function enqueue_scripts() {

		$screen = get_current_screen();
		if($screen->id != 'post'){
			return;
		}

		wp_enqueue_script(
			'post-notice-admin',
			plugins_url('post-notice/assets/scripts/admin.js'),
			array('jquery'),
			'0.1.0'
		);
	}
}