<navbar class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a href="/" class="navbar-brand">Swift</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-label="navbar toggle">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a class="nav-link" href="/about">About us</a></li>
          <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a class="nav-link" href="/contact">Contact</a></li>
    </ul>
  </div>
  </div>
</navbar>
