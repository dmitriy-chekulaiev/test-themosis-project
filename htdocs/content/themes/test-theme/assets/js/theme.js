jQuery(document).ready(() => {

});

jQuery(window).load(() => {
    if (jQuery('.homepage').length > 0) {
        jQuery('.hero__slider').slick({
            autoplay: true,
            arrows: false,
            fade: true,
            dots: false
        });
    }
});