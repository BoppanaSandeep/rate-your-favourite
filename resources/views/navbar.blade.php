<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-success"  href="javascript:void(0);">
        {{-- <i class="fas fa-heart"></i> --}}
    <img class="m-auto" src="{{url('/')}}/public/images/heart_green.ico" />
        &nbsp;Rate your favourite
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @guest
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('registers') }}">{{ __('Register') }}</a>
                </li>
            </ul>
        </div>
    @else
        <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="input-group w-50">
                <input type="text" class="form-control border border-primary" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle position-relative"  href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item font-weight-normal align-middle"  href="{{ URL('logout') }}"><i class="fas fa-sign-out-alt align-middle"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    @endguest
</nav>
