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
        content: setComments(),
        html: true,
        placement: 'left',
        title: `<span class='text-primary'>Comment</span><span class='fa float-right font-weight-bold text-danger' onclick='return $(".comment").popover("hide");'>&times;</span>`,
        trigger: 'click',
        fallbackPlacement: 'flip'
    })

    $(".comment").click(function(){
        $(".comment").not(this).popover('hide');
    })
})

function setComments(){
    return `
    <div class="row comments">
        <div class="col-12 morecomments">
            <div class="row">
                <div class="col-12 text-primary">Name</div>
                <div class="col-12">Comment</div>
                <div class="col-12">
                    <div class="col-4 text-primary">like</div>
                    <div class="col-4 text-primary">dislike</div>
                    <div class="col-4 text-primary">poke</div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row commenthere">
                <div class="col-12"><textarea class='form-control' name='comment'></textarea></div>
                <div class="col-12"><button class='btn btn-outline-primary btn-sm btn-block '>Save</button></div>
            </div>
        </div>
    </div>`;
}
