$(window).on("load", function(){
    var masons = [];

    $('.grid').each(function () {
        console.log(this);
        var mason = $(this).masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
        masons.push(mason);
    });
    console.log(masons);
});