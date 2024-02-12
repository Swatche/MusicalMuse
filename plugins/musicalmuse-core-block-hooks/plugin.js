wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'fancy-paragraph',
    label: 'Fancy Paragraph',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/social-links', 'pill-shape' );
} );

