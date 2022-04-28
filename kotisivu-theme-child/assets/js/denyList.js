/**
 * Unregister Gutenberg Core Blocks
 * Blocks that are commented out are enabled in editor
 * 
 */

var deniedBlocks = [
    'core/archives',
    'core/audio',
    'core/buttons',
    'core/calendar',
    'core/categories',
    // 'core/code',
    'core/columns',
    'core/cover',
    'core/embed',
    'core/file',
    'core/freeform',
    'core/gallery',
    'core/group',
    // 'core/heading',
    // 'core/html',
    // 'core/image',
    'core/latest-comments',
    'core/latest-posts',
    //'core/list',
    'core/loginout',
    'core/media-text',
    'core/more',
    'core/nextpage',
    'core/page-list',
    // 'core/paragraph',
    'core/post-content',
    'core/post-date',
    'core/post-excerpt',
    'core/post-featured-image',
    'core/post-terms',
    'core/post-title',
    'core/preformatted',
    'core/pullquote',
    'core/query-title',
    //'core/query',
    'core/quote',
    'core/rss',
    'core/search',
    'core/separator',
    // 'core/shortcode',
    'core/site-logo',
    'core/site-tagline',
    'core/site-title',
    'core/social-links',
    'core/spacer',
    'core/table',
    'core/tag-cloud',
    'core/text-columns',
    'core/verse',
    'core/video'
];

wp.domReady(function () {
    deniedBlocks.forEach((block) => {
        try {
            wp.blocks.unregisterBlockType(block);
        } catch (e) {
            console.error(`Failed to unregister block ${block} - Error: ${e}`);
        }
    })
});

