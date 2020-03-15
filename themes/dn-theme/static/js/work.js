
$(document).ready(function(){
    var grids = [];

    $('.grid').each(function(i, el){
        var $grid = $(el).masonry({
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

        grids.push($grid);
    });

});