<!-- header -->
<header>
    <nav>
      <div class="container">
        <div class="desktopNav">
          <div class="row">
            <div class="col-md-4">
              <div class="menuWrapper">
                <ul>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('artist-showcase')}}">Artist</a></li>
                  <li><a href="{{route('author-showcase')}}">Author</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="logoWrapper text-center">
                <a href="{{route('home')}}">
                  <img src="{{asset('image/logo.png')}}" alt="Art Showcase" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="leftmenuWrapper">
                <ul>
                  <li><a href="#">Showcase Your Art</a></li>
                  @if(Auth::check())
                    <li class="subMenuWrapper"><a href="Login.html" class="submenuLink">{{AUth::user()->first_name}}</a>
                      <div class="subMenu">
                        <ul>
                          <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                          <li>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                        </li>
                        </ul>
                      </div>
                    </li>
                  @else
                    <li class="subMenuWrapper"><a href="Login.html" class="submenuLink">Login</a>
                      <div class="subMenu">
                        <ul>
                          <li><a href="{{route('register')}}">Register Yourself</a></li>
                          <li><a href="{{route('login')}}">Login For Artist</a></li>
                          <li><a href="{{route('login')}}">Login For Author</a></li>
                        </ul>
                      </div>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="mobileNav">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
              <img src="{{asset('image/logo.png')}}" alt="Art Showcase" class="img-fluid mobLogo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse mt-3" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('artist-showcase')}}">Artist</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('author-showcase')}}">Author</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Register Yourself.html">Register Yourself</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Showcase Your Art</a>
                </li>
                <li class="nav-item subMenuWrapper">
                  Login
                  <div class="subMenu">
                    <ul>
                      <li><a href="Register Yourself.html">Register Yourself</a></li>
                      <li><a href="Login.html">Login For Artist</a></li>
                      <li><a href="Login.html">Login For Author</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header -->
