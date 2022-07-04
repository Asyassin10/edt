
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white font-weight-light fst-italic text-monospace " aria-current="page" href="#">gestion de projet</a>
          </li>
          <!--dropdown -->
                                 @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Auth::check())
              @if (auth()->user()->role_id )
              <a class="dropdown-item" href="{{route('clients.index')}}">Home Client</a>
              <a class="dropdown-item" href="{{route('contacts.index')}}">Home Contacts</a>
              <a class="dropdown-item" href="{{route('projets.index')}}">Home projets</a>
              <a class="dropdown-item" href="{{route('phases.index')}}">Home phase Projet</a>
              <a class="dropdown-item" href="{{route('appeloffres.index')}}">Home appel offre</a>
              <a class="dropdown-item" href="{{route('cautions.index')}}">Home caution</a>
              <a class="dropdown-item" href="{{route('laborcosts.index')}}">Home laborcost</a>
              <div class="dropdown-divider"></div>
              @endif
              @endif
              <a class="dropdown-item" href="{{route('tasks.index')}}">Home tasks</a>
              <a class="dropdown-item" href="{{route('conges.index')}}">Home Congé </a>
          </div>
        </li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">
      <img src="{{asset('image/logo.png.opdownload')}}" width="60" height="30" class="d-inline-block align-top" alt="">

    </a>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
