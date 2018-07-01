<header class="header">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

      <div class="container">

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse justify-content-center font-weight-bold" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Features</a>
            </li>

          </ul>
          <!-- Links -->

          <!-- Navbar brand -->
          <a class="navbar-brand px-lg-4 mr-0" href="#">
            <img  src="{{asset('images/image.png')}}" alt="main">
          </a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimonials</a>
            </li>
          </ul>
          <!-- Links -->

        </div>
      </div>
    </nav>
  </header>
  {{--<nav class="navbar navbar-expand-lg navbar-dark bg-black align-content-center">--}}

    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"--}}
            {{--aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
      {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}
    {{--<div class="collapse navbar-collapse" id="navbarNav">--}}
      {{--<ul class="navbar-nav">--}}
        {{--<li class="nav-item {{ (request()->is('/') ? 'active' : '') }}">--}}
        {{--</li>--}}
        {{--<li class="nav-item {{ (request()->is('posts/create') ? 'active' : '') }}">--}}
          {{--<a class="nav-link" href="{{ url('/posts/create') }}"><h6><b>СТВОРИТИ СКАРГУ</b></h6></a>--}}
        {{--</li>--}}
        {{--<li class="nav-item  float-md-right{{ (request()->is('posts') ? 'active' : '') }}">--}}
          {{--<a class="nav-link" href="{{ url('/posts') }}"><h5><b>ПОКАЗАТИ ВС1</b></h5></a>--}}
        {{--</li>--}}
      {{--</ul>--}}
    {{--</div>--}}
    {{--<hr>--}}
  {{--</nav>--}}
</header>