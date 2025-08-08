<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid"> 

    <a class="navbar-brand text-white" href="{{ route('dashboard') }}">MY PROJECT</a>

   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> 
      <ul class="navbar-nav">
        @guest
          <li class="nav-item">
            <a class="nav-link me-2 text-white" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 text-white" href="{{ route('register') }}">Register</a>
          </li>
        @else
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline ">
              @csrf
              <button class="btn btn-link nav-link me-2 text-white">Logout</button>
            </form>
          </li>
        @endguest

        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('about') }}">About</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
