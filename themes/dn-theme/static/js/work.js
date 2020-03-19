
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


    $('.image-modal-link').click(function(event){
        event.preventDefault();
        modalHandler(event.currentTarget);
    });

    $('.image-modal.overlay-light, .modal .close').click(function(event){
        $('.image-modal').fadeOut(350, 'linear');
    });

    $(document).keyup(function (e) {
        if (e.keyCode === 27) $('.image-modal').fadeOut(350, 'linear');   // esc
    });

    $('.modal-dialog').click(function(event){
        event.stopPropagation();
    });
});

function imagesLoadedHandler($grid ){
    $grid.masonry('layout');
    $grid.prev().animate({ opacity: 0 }, 350, "swing", function () {
        $grid.animate({ opacity: 1 }, 200, "swing");
    });
}

function modalHandler(link){
    var img = $(link).find('figure').clone();
    var title = $(img).attr('data-title')
    var imgModal = $('.image-modal');
    imgModal.find('.modal-body > *').remove();
    imgModal.find('.modal-body').append(img)
    imgModal.find('.modal-title').text(title);
    imgModal.fadeIn(350,'linear');
}