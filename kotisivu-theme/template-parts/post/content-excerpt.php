<?php

echo '<div class="post-excerpt__card has-shadow">';
    echo '<a href="' . get_the_permalink() . '"><img class="post-excerpt__image" src="' . get_the_post_thumbnail_url(get_the_ID()) . '"/></a>';
    echo '<a href="' . get_the_permalink() . '"><' . $args['heading_level'] . ' class="post-excerpt__title">' . get_the_title() . '</' . $args['heading_level'] . '></a>';
    echo '<span class="post-excerpt__date">' . __('Posted on:', 'kotisivu-theme') . " " . get_the_date( get_option('date_format') ) . '</span>';
    echo '<p>' . get_the_excerpt() . '</p>';
    echo'<a href="' . get_the_permalink() . '">
            <span class="btn btn--clr-primary btn--small post-excerpt__button ">' . 
            __('Read more', 'kotisivu-theme') . 
            '</span>
        </a>';
echo '</div>';

?>