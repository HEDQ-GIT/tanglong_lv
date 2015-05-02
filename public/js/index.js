
$(function() {
   //$('.fadein').fadeIn('slow');
    alert(1);
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        speed: 800,
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
        mousewheelControl: true,
        onSlideChangeStart: function(swiper){
            if (swiper.activeIndex == 3) {
                alert('services');
                $(".fadein").fadein("slow");
                ;
            }
        }
    });
});