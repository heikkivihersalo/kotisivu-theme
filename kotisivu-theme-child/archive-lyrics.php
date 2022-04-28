<?php get_header(); ?>
<?php $album_terms = get_terms('albums'); ?>

<main id="main" class="site-main lyrics blog-archive">
    <div class="is-narrow">
        <h1><?php echo __('Lyrics', 'kotisivu-theme'); ?></h1>
        <!-- Loop through album names--->
        <?php foreach ($album_terms as $term) : ?>
            <h2><?php echo $term->name ?></h2>
            <?php $query = new WP_Query( 
                    [   
                        'post_type' => 'lyrics',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'albums',
                                'field' => 'slug',
                                'terms' => $term->slug
                            )),
                        'meta_key' => 'song_index',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC'
                    ]); 
            ?>
            <?php if ( $query -> have_posts() ) : ?>
                <ul class="lyrics__song-list">
                    <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
                    <?php $song_index = get_post_meta( get_the_ID(), 'song_index', true ); ?>
                        <li class="lyrics__song-list-item">
                            <a href="<?php echo get_permalink() ?>">
                                <?php if(isset($song_index) && $song_index != NULL) : ?>
                                    <span class="lyrics__song-list-item-index"><?php echo $song_index ?>. </span>
                                <?php endif; ?>
                                <?php echo the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            <?php endif;?>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php $query = new WP_Query( 
                [   
                    'post_type' => 'lyrics',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'albums',
                            'field' => 'slug',
                            'terms' => $album_terms[0]->slug,
                            'operator' => 'NOT EXISTS'
                        )),
                    'meta_key' => 'song_index',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
                ]); 
        ?>

        <?php if ( $query -> have_posts() ) : ?>
            <!-- GET UNCATEGORIZED POSTS --->
            <h2><?php echo __('Uncategorized', 'kotisivu-theme') ?></h2>
            <ul class="lyrics__song-list">
                <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
                <?php $song_index = get_post_meta( get_the_ID(), 'song_index', true ); ?>
                    <li class="lyrics__song-list-item">
                        <a href="<?php echo get_permalink() ?>">
                            <?php if(isset($song_index) && $song_index != NULL) : ?>
                                <span class="lyrics__song-list-item-index"><?php echo $song_index ?>. </span>
                            <?php endif; ?>
                            <?php echo the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        <?php endif;?>
    </div>
</main>

<?php get_footer(); ?>
