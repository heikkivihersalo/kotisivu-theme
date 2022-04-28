<div class="post__meta">
    <?php echo get_avatar( $args['author_id'], 96, '', '', array( 'class' => array('post__author-img'))); ?>
    <span class="post__author-name"><?php echo get_the_author_meta('display_name', $args['author_id']) ?></span>
    <span class="post__date">
        <?php echo __('Posted on:', 'kotisivu-theme') ?> 
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
			<?php echo get_the_date( get_option('date_format') ); ?>
		</time>
    </span>
</div>