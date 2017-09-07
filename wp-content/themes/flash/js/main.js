/**
 * Created by reinowis on 02/09/2017.
 */
//load carousel slider
jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
    }
})