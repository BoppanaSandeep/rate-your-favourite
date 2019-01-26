<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rate your favourite</title>
    <link rel="icon" href="public/images/heart_green.ico">
    <link href="public/css/app.css" rel="stylesheet" />
    <link href="public/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="public/css/webapp.css" rel="stylesheet" />
    <script src="public/js/app.js"></script>
    <script src="public/js/webapp.js"></script>
</head>

<body>
    <div class="container-fluid">
        @include('navbar')
        <div class="body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4" id="aurf-form-block">
                    <div class="row align-items-center">
                        <div class="d-none d-sm-none d-md-none d-lg-block col-lg-2">
                            <button class="btn btn-link" id="left-arrow"><i class="fas fa-arrow-left"></i></button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <a class="btn btn btn-outline-light btn-lg btn-block text-primary" data-toggle="collapse" href="#add-your-favourite"
                            role="button" aria-expanded="false" aria-controls="add-your-favourite">Add your favourite</a>
                        </div>
                    </div>
                    <div class="collapse" id="add-your-favourite">
                        <div class="card card-body">
                            <form name="add-your-favourite-form" id="add-your-favourite-form" method="POST" action="./addyourfavouriteform" enctype="multipart/form-data" onsubmit="return true;">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-8" id="today-fav-block">
                    <div class="row align-items-center">
                        <div class="d-none d-sm-none d-md-none d-lg-block col-lg-2">
                            <button class="btn btn-link d-none" id="right-arrow"><i class="fas fa-arrow-right"></i></button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <a class="btn btn btn-outline-light btn-lg btn-block text-primary">Today Favourites</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row" id="fav-posts">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>
