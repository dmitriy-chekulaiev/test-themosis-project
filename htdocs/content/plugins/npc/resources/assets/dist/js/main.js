// import external dependencies



////Function document ready
jQuery(document).ready(() => {

    // Open select location
    $('.select_location button').click(function () {
        $('.select_options').toggleClass('active');
    });

    // filter specialists
    $(function ($) {
        $(document).mouseup(function (e) {
            var div = $(".select_options");
            var div2 = $(".select_location");
            if (!div.is(e.target)
                && div.has(e.target).length === 0 && !div.is(e.target) && div2.has(e.target).length === 0) {
                div.removeClass('active');
            }
        });
    });
});




