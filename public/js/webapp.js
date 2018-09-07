$(function() {
    $('.body').css('min-height', (window.innerHeight + 50) + 'px')
    window.onresize = function() {
        $('.body').css('min-height', (window.innerHeight + 50) + 'px')
        if (window.innerWidth > 991) {
            $('#add-your-favourite').collapse('show')
        } else {
            $('#add-your-favourite').collapse('hide')
        }
    }
    $(window).scroll(function(e) {
        if ($(document).scrollTop().valueOf() > 0) {
            $('.navbar').addClass('navbar-fix')
        } else {
            $('.navbar').removeClass('navbar-fix')
        }

        if ($(document).scrollTop().valueOf() < 45) {
            $('footer').addClass('footer')
        } else {
            $('footer').removeClass('footer')
        }
    })

    if (window.innerWidth > 991) {
        $('#add-your-favourite').collapse('show')
    } else {
        $('#add-your-favourite').collapse('hide')
    }
})