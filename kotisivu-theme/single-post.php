<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); 

global $post;

$post_id = $post->ID;
$author_id = $post->post_author;
$sidebar = is_active_sidebar( 'sidebar-1' );

?>

<?php if ( $sidebar ) : ?>
    <div class="blog-container has-sidebar">
<?php else : ?>
    <div class="blog-container">
<?php endif; ?>
    <main class="blog__content">
        <!-- Get Post Template -->
        <?php get_template_part( 'template-parts/post/content', '' , array('post_id' => $post_id, 'author_id' => $author_id)); ?>

        <!-- Get Related Posts -->
        <?php $args = array(
            'category__in' => wp_get_post_categories($post_id), 
            'numberposts' => 3, 
            'post__not_in' => array($post_id) 
            );
        
        $query = new WP_Query( $args );

        if ( $query -> have_posts() ) :
            echo '<section class="related-posts">';
            echo '<h2 class="related-posts__heading">' . __('You may also like these', 'kotisivu-theme') . '</h2>';
                echo '<div class="related-posts__container">';
                    while ( $query -> have_posts() ) : $query -> the_post();
                        get_template_part( 'template-parts/post/content-excerpt', '' , 
                            array(
                                'heading_level' => 'h3'
                            ));
                    endwhile;
                echo '</div>';
            echo '</section>';
		endif; wp_reset_postdata(); ?>

    </main>

    <?php if ( $sidebar ) : ?>
        <!-- Get Sidebar -->
        <aside class="blog__sidebar">
            <?php get_sidebar( 'sidebar-1' ); ?>
        </aside>
    <?php endif; ?>

</div>
  
<?php get_footer(); ?>
