<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-success"  href="javascript:void(0);">
        {{-- <i class="fas fa-heart"></i> --}}
        <img class="m-auto" src="public/images/heart_green.ico" />
        &nbsp;Rate your favourite
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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
        <form class="form-inline my-2 my-lg-0" onsubmit="return false;">
            <input class="form-control mr-sm-2 text-primary" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
