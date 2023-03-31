const myCarouselElement = document.querySelector('#carouselExample')

const Carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: false
});
if(window.matchMedia("(min-width:576px)").matches){
    var carousel = $('.carousel-inner')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width()*1.079;

    var scrollPosition = 0;

    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth*3))){
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 500);    
        }

    });

    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            console.log('prev');
            scrollPosition = scrollPosition - cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 500);    
        }
    });
}else{
    $(myCarouselElement).addClass('slide');
}