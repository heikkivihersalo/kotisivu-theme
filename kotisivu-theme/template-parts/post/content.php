<article class="post">
        <?php echo get_the_post_thumbnail($args['post_id'], 'full', array( 'class' => 'post__image has-shadow--strong' )); ?>
        <div class="post__content is-narrow">
            <?php get_template_part( 'template-parts/post/content-meta', '', array('author_id' => $args['author_id'])); ?>
            <h1><?php echo get_the_title(); ?></h1>
            <div class="post__tags">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo '<span class="tag--hashtag">' . $tag->name . '</span>'; 
                        }
                    }
                 ?>
            </div>
            <?php echo get_the_content(); ?>
        </div>
</article>