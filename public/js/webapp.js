$(function() {

    $('.body').css('min-height', (window.innerHeight) + 'px')

    getFavPosts()

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
    });

    $("#left-arrow").click(function(){
        $("#aurf-form-block").addClass("d-none");
        $("#right-arrow").removeClass("d-none");
        $("#today-fav-block").removeClass("col-lg-8");
        $("#today-fav-block").addClass("col-lg-12");
        $("#fav-posts>div").removeClass("col-md-4");
        $("#fav-posts>div").addClass("col-md-3");
    });

    $("#right-arrow").click(function(){
        $("#aurf-form-block").removeClass("d-none");
        $("#right-arrow").addClass("d-none");
        $("#today-fav-block").removeClass("col-lg-12");
        $("#today-fav-block").addClass("col-lg-8");
        $("#fav-posts>div").removeClass("col-md-3");
        $("#fav-posts>div").addClass("col-md-4");
    });

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

function getFavPosts(){
    $.get('./getfavposts', null, function(posts){
        console.log($.parseJSON(posts));
        var template = '';
        $.each($.parseJSON(posts).posts, function(key, value){
            template+=`<div class="col-12 col-sm-5 col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="` + value.favImage + `" alt="post dp" onclick="viewImage(this);">
                                <div class="card-body">
                                    <h5 class="card-title">` + value.favName + `</h5>
                                    <div class="card-text">
                                        ` + value.favComment + `
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link"><i class="far fa-heart"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link comment"><i class="far fa-comment-alt"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link"><span class="badge badge-light">3min
                                            ago</span></a>
                                </div>
                            </div>
                        </div>`
        })
        $("#fav-posts").append(template);

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
}

function viewImage(el){
    console.log(el.src);
    $("body").append(`<div class="view-image" onclick="removeImage(this);"><img class="view-image" src="` + el.src + `" alt="post dp" /></div>`);
    $(".container-fluid").addClass("pointer-events-none");
}

function removeImage(el){
    $(el).remove();
    $(".container-fluid").removeClass("pointer-events-none");
}
