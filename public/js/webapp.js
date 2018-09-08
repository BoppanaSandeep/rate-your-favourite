$(function() {

    $('.body').css('min-height', (window.innerHeight) + 'px')

    if (window.innerWidth > 991) {
        $('#add-your-favourite').collapse('show')
    } else {
        $('#add-your-favourite').collapse('hide')
    }

    window.onresize = function() {
        $('.body').css('min-height', (window.innerHeight) + 'px')
        if (window.innerWidth > 991) {
            $('#add-your-favourite').collapse('show')
        }
    }

    $(window).scroll(function(e) {
        if ($(document).scrollTop().valueOf() > 0) {
            $('.navbar').addClass('navbar-fix')
        } else {
            $('.navbar').removeClass('navbar-fix')
        }

        // if ($(document).scrollTop().valueOf() < 2) {
        //     $('footer').addClass('footer')
        // } else {
        //     $('footer').removeClass('footer')
        // }
    })

    $('.comment').popover({
        animation: true,
        content: "<textarea class='form-control' name='comment' /></textarea><br><button class='btn btn-outline-primary btn-sm btn-block'>Save</button>",
        html: true,
        placement: 'auto',
        title: "<span class='text-primary'>Comment</span><span class='fa float-right font-weight-bold text-danger'>&times;</span>",
        trigger: 'click',
        fallbackPlacement: 'flip'
    })

    $(".comment").click(function(){
        $(".comment").not(this).popover('hide');
    })
})
