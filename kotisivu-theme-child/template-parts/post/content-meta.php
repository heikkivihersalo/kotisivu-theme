<div class="post__meta">
    <?php
        echo get_avatar( 
            $args['author_id'], 96, 
            '', 
            '', 
            array( 'class' => array('post__author-img'))
            );
        echo '<span class="post__author-name">' . get_the_author_meta('display_name', $args['author_id']) . '</span>';
        echo '<span class="post__date">' . __('Posted on:', 'kotisivu-theme') . " " . get_the_date( get_option('date_format') ) . '</span>';
    ?>
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
</div>