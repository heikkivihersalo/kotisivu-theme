<?php get_header(); ?>
<?php $posts_page = get_post(get_option('page_for_posts')); ?>

<main id="main" class="site-main blog-archive">
    <?php $blocks = parse_blocks($posts_page->post_content); ?>
    <?php foreach ($blocks as $block) :?>
        <?php echo render_block($block); ?>
    <?php endforeach; ?>
</main>

<?php get_footer(); ?>
