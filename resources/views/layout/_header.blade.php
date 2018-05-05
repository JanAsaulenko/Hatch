<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="logo" src="{{asset('images/logo.jpg')}}" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ (request()->is('/') ? 'active' : '') }}">
        </li>
        <li class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">
          <a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>
        </li>
        <li class="nav-item {{ (request()->is('posts') ? 'active' : '') }}">
          <a class="nav-link" href="{{ url('/posts') }}"><h6><b>ПОКАЗАТИ ВС1</b></h6></a>
        </li>
      </ul>
    </div>
    <hr>
  </nav>
</header>