var carousel = $('.carousel-inner')[0].scrollWidth;
var cardWidth = $('.carousel-item').width();

var scrollPosition = 0;

$('.carousel-control-next').on('click', function(){
    if(scrollPosition < (carousel-(cardWidth*4))){
        alert('next');
        scrollPosition = scrollPosition + cardWidth;
        $('.carousel-inner').animate({scrollLeft: scrollPosition}, 600);    
    }

});

$('.carousel-control-prev').on('click', function(){
    if(scrollPosition > 0){
        console.log('prev');
        scrollPosition = scrollPosition - cardWidth;
        $('.carousel-inner').animate({scrollLeft: scrollPosition}, 600);    
    }

});