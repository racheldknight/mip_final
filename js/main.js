jQuery(document).ready(function($) {
$(".hoverbox")
    .mouseenter(function () {
        $(this).addClass("on");
    })
    .mouseleave(function () {
        $(this).removeClass("on");
    });
    
});