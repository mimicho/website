$('#myCarousel').on('slid', '', checkitem);  // on caroussel move
$('#myCarousel').on('slid.bs.carousel', '', checkitem); // on carousel move

$(document).ready(function(){               // on document ready
    checkitem();
});

function checkitem()                        // check function
{
    var $this = $('#myCarousel');
    if($('.carousel-inner .item:first').hasClass('active')) {
        $this.children('.left.carousel-control').hide();
        $this.children('.right.carousel-control').show();
    } else if($('.carousel-inner .item:last').hasClass('active')) {
        $this.children('.left.carousel-control').show();
        $this.children('.right.carousel-control').hide();
    } else {
        $this.children('.carousel-control').show();
    } 
}