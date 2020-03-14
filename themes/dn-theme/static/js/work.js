$(window).on("load", function(){
    $('.grid').cement({
        columnMinWidth: 200,
        brickSelector: ".grid-item",
        horizontalGutter: 24,
        verticalGutter: 24
    });
});