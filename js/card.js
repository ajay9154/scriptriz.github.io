$( document ).ready(function () {
    $(".moreBox").slice(0, 3).show();
    if ($(".card:hidden").length != 0) {
        $("#loadMore").show();
    }		
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 1).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
});



$('.one-time').slick({
dots: true,
infinite: true,
speed: 300,
slidesToShow: 1,
adaptiveHeight: true
});
