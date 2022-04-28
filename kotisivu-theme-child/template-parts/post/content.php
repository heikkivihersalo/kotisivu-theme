<article class="post">
        <?php echo get_the_post_thumbnail($args['post_id'], 'full', array( 'class' => 'post__image' )); ?>
        <div class="post__content is-narrow">
            <?php get_template_part( 'template-parts/post/content-meta', '', array('author_id' => $args['author_id'])); ?>
            <h1><?php echo get_the_title(); ?></h1>
            <?php echo get_the_content(); ?>
        </div>

        <div class="post-share is-narrow">
            <h2 class="post-share__heading">Jaa kirjoitus</h2>
            <div class="post-share__icon-container">
                <a class="post-share__icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fab fa-facebook-square"></i></a>
                <a class="post-share__icon" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fab fa-linkedin"></i></a>
                <a class="post-share__icon" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text="><i class="fab fa-twitter-square"></i></a>
            </div>
        </div>
        <!-- Get links to previous and next posts -->
        <?php
            echo get_the_post_navigation( array(
                'next_text' =>
                    '<span class="post-title">%title</span>' . 
                    '<span class="dashicons dashicons-arrow-right"></span>',
                'prev_text' =>
                    '<span class="dashicons dashicons-arrow-left"></span>' .
                    '<span class="post-title">%title</span>',
                'class' => 'post__next-prev'
            ) );
        ?>
</article>