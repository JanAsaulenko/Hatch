<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="{{asset('images/logo.jpg')}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ (request()->is('/') ? 'active' : '') }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ (request()->is('request-form') ? 'active' : '') }}">
                    <a class="nav-link" href="{{ url('/request-form') }}">Form</a>
                </li>
                <li class="nav-item {{ (request()->is('/view_all') ? 'active' : '') }}">
                    <a class="nav-link" href="{{ url('/view_all') }}">View all</a>
                </li>
            </ul>
        </div>
    </nav>
</header>