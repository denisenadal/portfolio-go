
$(document).ready(function(){
    var grids = [];

    $('.grid').each(function(i, el){
        if ( ($(el).find('.grid-item')).length > 1 ){

            var $grid = $(el).masonry({
                // options...
                columnWidth: '.grid-sizer',
                itemSelector: '.grid-item',
                percentPosition: true,
                gutter: 0,
                initLayout: false,
            });

           
            $grid.imagesLoaded().done(function () {
               imagesLoadedHandler($grid);
            })
            .fail(function () {
                imagesLoadedHandler($grid);
            });

            grids.push($grid);
        }
    });
});

function imagesLoadedHandler($grid ){
    $grid.masonry('layout');
    $grid.prev().animate({ opacity: 0 }, 350, "swing", function () {
        $grid.animate({ opacity: 1 }, 200, "swing");
    });
}