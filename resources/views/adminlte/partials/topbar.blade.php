  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a class="nav-link red" target="_blank" href="{!!  route('landing') !!}">Go to Website</a>
          </li>
      </ul>

      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">
                      {{ Auth::user()->name }}
                  </span>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      </ul>
  </nav>
