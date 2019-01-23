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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="javascript:void(0);">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:void(0);">Action</a>
                        <a class="dropdown-item"  href="javascript:void(0);">Another action</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"  href="javascript:void(0);">Disabled</a>
                </li>
            </ul>
            <form class="form-inline m-2 my-lg-0" onsubmit="return false;">
                <input class="form-control mr-sm-2 text-primary" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="mx-2 text-danger font-weight-bolder" tooltip="Logout" href="{{ URL('logout') }}" role="button">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    @endguest
</nav>
