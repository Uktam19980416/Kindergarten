<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
    <a class="navbar-brand" href="/">118-sonli MTT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                <a href="/" class="nav-link pl-0">Bosh Menu</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : null }}">
                <a href="{{ route('about') }}" class="nav-link">Haqimizda</a>
            </li>
            <li class="nav-item {{ Request::is('teacher') ? 'active' : null }}">
                <a href="{{ route('teacher') }}" class="nav-link">O'qituvchilar</a>
            </li>
            <li class="nav-item {{ Request::is('courses') ? 'active' : null }}">
                <a href="{{ route('courses') }}" class="nav-link">Kurslar</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->