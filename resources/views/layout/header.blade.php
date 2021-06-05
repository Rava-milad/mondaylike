<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand text-white" href="#" id="test">MoOn.com</a>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
                <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('panel') }}">Panel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> --}}
            @if(auth()->check())
                <form action="{{ route("logout") }}" method="POST">
                    @csrf
                    {{-- <li class="nav-item">
                        <a href="{{ route("logout") }}" class="nav-link text-white">LogOut</a>
                    </li> --}}
                    <button class="btn btn-dark">logout</button>
                </form>
            @else
            <li class="nav-item">
                <a href="{{ route("login") }}" class="nav-link text-white text-bold" id="login">LogIn</a>
            </li>
            <li class="nav-item">
                <a href="{{ route("register") }}" class="nav-link text-white">Register</a>
            </li>
            @endif

                
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
    </div>
</nav>
