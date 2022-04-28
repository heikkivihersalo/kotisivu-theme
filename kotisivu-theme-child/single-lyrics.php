<?php get_header(); ?>
<?php global $post ?>
<?php $album_terms = wp_get_post_terms( $post->ID, 'albums' ); ?>

<?php $song_list_args = array(
    'post_status' => 'publish',
    'tax_query' => array(
        array (
            'taxonomy' => 'albums',
            'field' => 'slug',
            'terms' => $album_terms[0]->slug
        )),
    'post_type' => 'lyrics',
    'meta_key' => 'song_index',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
); ?>

<?php $song_list_query = new WP_Query( $song_list_args ); ?>

<main id="main" class="site-main lyrics">
    <a class="lyrics__back-to is-narrow" href="/lyrics"><?php echo __('Back to lyrics page', 'kotisivu-theme'); ?></a>
    <div class="lyrics__album-info">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'lyrics__cover-art', 'title' => $album_terms[0]->name ]); ?>
        <h3><?php echo $album_terms[0]->name; ?></h3>
        <ul class="lyrics__song-list">
        <?php if ( $song_list_query -> have_posts() ) : ?>
            <?php while ( $song_list_query -> have_posts() ) : $song_list_query -> the_post(); ?>
                <li class="lyrics__song-list-item">
                    <a href="<?php echo get_permalink() ?>">
                        <span class="lyrics__song-list-item-index"><?php echo get_post_meta( get_the_ID(), 'song_index', true )?>. </span>
                        <?php echo the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
        </ul>
    </div>
    <div class="lyrics__content is-narrow">
        <h1 class="lyrics__title"><?php the_title(); ?></h1>
        <span class="lyrics__composers"><?php echo get_post_meta( get_the_ID(), 'song_composers', true ); ?></span>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
