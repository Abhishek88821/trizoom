$(document).ready(function(){

    //SOLUTIONS START 
    $('.clt_div-box-home-03').hover(function() {
        $('.clt_div-box-home-03').not(this).removeClass ('showCard'); 
        $(this).toggleClass('showCard');
    }); 

    //SERVICES START 
    $("#ser-div-box, #tes-div-box").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: false,
        autoPlay: true,
        navigationText: ['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>']
    });

});