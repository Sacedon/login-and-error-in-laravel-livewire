<header>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">CheapTalk</a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            @guest
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link text-light" href="/posts">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/categories">Categories</a>
              </li>
              <li class="nav-item dropdown">
                @if(auth()->check())
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    User: {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <form method="GET" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                    </li>
                  </ul>
                @endif
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <style>
    .navbar-nav .nav-link:hover {
      color: #fff;
      text-decoration: underline;
    }
  </style>
  