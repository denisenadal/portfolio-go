var $grid = $('#process-gallery').masonry({
    // options...
    columnWidth: '.grid-sizer',
    itemSelector: '.grid-item',
    percentPosition: true,
    gutter: 0,
    initLayout: false,
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function () {
    $grid.masonry('layout');
});