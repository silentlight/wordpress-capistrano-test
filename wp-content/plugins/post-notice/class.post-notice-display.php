<?php

class Post_Notice_Display {

	public function initialize() {
		add_filter('the_content', array($this, 'display_notice'));
		add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
	}

	public function enqueue_styles() {
		wp_enqueue_style(
			'post-notice',
			plugins_url('post-notice/assets/styles/public.css'),
			array(),
			'0.1.0'
		);
	}

	public function display_notice($content) {
		$notice = get_post_meta(get_the_ID(), 'post-notice', true);

		if($notice != ''){
			$content = '<div class="post-notice">' . $notice . '</div>' . $content;
		}

		return $content;
	}
}