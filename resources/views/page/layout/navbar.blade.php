<!-- Navbar Utama -->

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img class="img-fluid" loading="lazy" src="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" alt="logo-danajaya-design" width="80" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about/profile" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About</a>
        <a href="/projects/interior-design" class="nav-link {{ request()->is('projects*') ? 'active' : '' }}">Project</a>
        <a href="/forms/create" class="nav-link {{ request()->is('forms*') ? 'active' : '' }}">Contact Us</a>
      </div>
    </div>
  </div>
</nav>

<!-- Submenu untuk About -->
@if(request()->is('about*'))
<div class="container submenu about mt-5">
    <div class="row">
        <div class="col navbar">
            <ul class="list-group navbar-nav">
                <li class="list-group-item nav-item">
                    <a href="/about/profile" class="{{ request()->is('about/profile') ? 'active' : '' }}">Profile</a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="/about/team" class="{{ request()->is('about/team*') ? 'active' : '' }}">Team</a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="/about/design-method" class="{{ request()->is('about/design-method') ? 'active' : '' }}">Design Method</a>
                </li>

            </ul>
        </div>
        <div class="col navbar">
            <ul class="list-group navbar-nav">
                <li class="list-group-item nav-item">
                    <a href="/about/partner" class="{{ request()->is('about/partner') ? 'active' : '' }}">Partner</a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="/about/client" class="{{ request()->is('about/client') ? 'active' : '' }}">Client</a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="/about/award" class="{{ request()->is('about/award') ? 'active' : '' }}">Award</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

<!-- Submenu untuk Project -->
@if(request()->is('projects*'))
<div class="container submenu projects mt-5">
    <div class="row justify-content-center">
        <div class="col d-flex justify-content-center">
            <a href="/projects/interior-design" class="{{ request()->is('projects/interior-design*') ? 'active' : '' }}">Interior Design</a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="/projects/architecture-design" class="{{ request()->is('projects/architecture-design*') ? 'active' : '' }}">Architecture Design</a>
        </div>
    </div>
</div>

@endif

<style>
/* Style untuk submenu */
.submenu {
    margin-bottom: 1cm;
}

.submenu a {
    text-decoration: none;
    margin: 0 15px;
    padding: 5px 0;
    color: black; /* Default color */
    transition: color 0.3s; /* Smooth color transition on hover */
}

.submenu a:hover,
.submenu a.active {
    color: goldenrod; /* This will be applied on hover and also on active class */
}

/* Reset margin dan padding */
body {
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman';
}

</style>

