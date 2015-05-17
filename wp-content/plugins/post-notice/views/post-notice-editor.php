<div id="post-notice-preview">

</div>
<textarea name="post-notice"><?php echo get_post_meta(get_the_ID(), 'post-notice', true); ?></textarea>
<?php wp_nonce_field('post-notice-save', 'post-notice-nonce'); ?>