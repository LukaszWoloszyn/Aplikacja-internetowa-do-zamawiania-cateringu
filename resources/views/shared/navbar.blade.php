<nav class="navbar navbar-expand-lg nav-bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Catering dietetyczny</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Start</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('recip')}}">Przepisy</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('main1')}}">Diety</a>
          </li>


          @if (Auth::check() && Auth::user()->admin)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="{{route('admin.offers.edit')}}">Edytuj ofertę</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.createOff')}}">Dodaj ofertę</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.recipe')}}">Edytuj przepis</a></li>
                        </ul>
                    </li>
                @endif

                @guest
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders.index')}}">Zamówienia</a>
                    </li>
                @endguest
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.form') }}">Zaloguj się</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Wyloguj się
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
      </div>
    </div>
  </nav>
