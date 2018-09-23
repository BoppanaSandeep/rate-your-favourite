<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rate your favourite</title>
    <link rel="icon" href="images/heart_green.ico">
    <link href="css/app.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/webapp.css" rel="stylesheet" />
    <script src="js/app.js"></script>
    <script src="js/webapp.js"></script>
</head>

<body>
    <div class="container-fluid">
        @include('navbar')
        <div class="body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <a class="btn btn btn-outline-light btn-lg btn-block text-primary" data-toggle="collapse" href="#add-your-favourite"
                        role="button" aria-expanded="false" aria-controls="add-your-favourite">Add your favourite</a>
                    <div class="collapse" id="add-your-favourite">
                        <div class="card card-body">
                            <form name="add-your-favourite-form" id="add-your-favourite-form" method="POST" action="/addyourfavouriteform" enctype="multipart/form-data" onsubmit="return true;">
                                @csrf
                                <div class="form-group">
                                    <label for="add-your-fav-name">Today's Favourite</label>
                                    <input type="text" class="form-control" name="add-your-fav-name" id="add-your-fav-name"
                                        placeholder="Today's Favourite">
                                </div>
                                <div class="form-group">
                                    <label for="add-your-fav-name">Favourite picture</label>
                                    <input type="file" class="form-control" name="fav-pic" id="fav-pic"
                                            aria-describedby="fav-pic">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn btn-outline-primary btn-block" name="submit-fav" id="submit-fav">Add
                                        your favourite</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="col-12">
                        <a class="btn btn btn-outline-light btn-lg btn-block text-primary">Today Favourites</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12" id="fav-posts">
                        {{-- <div class="col-12 col-sm-5 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/wallpaper.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sandeep</h5>
                                    <div class="card-text">
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link"><i class="far fa-heart"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link comment"><i class="far fa-comment-alt"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link"><span class="badge badge-light">3min
                                            ago</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/wallpaper.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sandeep</h5>
                                    <div class="card-text">
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link"><i class="far fa-heart"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link comment"><i class="far fa-comment-alt"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link"><span class="badge badge-light">3min
                                            ago</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/wallpaper.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sandeep</h5>
                                    <div class="card-text">
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link"><i class="far fa-heart"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link comment"><i class="far fa-comment-alt"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link"><span class="badge badge-light">3min
                                            ago</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/wallpaper.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sandeep</h5>
                                    <div class="card-text">
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                        SRYETT DJYFYUYTYUFJY FY F JFYF ert erter trtwtwrt wrt wrt wt wt werrt
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link"><i class="far fa-heart"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link comment"><i class="far fa-comment-alt"></i>&nbsp;<span class="badge badge-light">9</span></a>
                                    <a class="card-link"><span class="badge badge-light">3min
                                            ago</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>
