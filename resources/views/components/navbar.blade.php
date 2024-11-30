<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('Template/assets/img/Logo.png') }}" alt="">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="/programs" class="{{ request()->is('programs') ? 'active' : '' }}">Programs</a></li>
          <li><a href="/posts" class="{{ request()->is('posts') || request()->is('posts/*') ? 'active' : '' }}">Article</a></li>
        </ul>
      </nav>
    </div>
  </header>