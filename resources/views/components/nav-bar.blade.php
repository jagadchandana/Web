@php
    $currentRoute = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a href="{{ route('home') }}"><b><?php echo "$currentRoute" ?></b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashBord') }}">DashBord</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('project') }}">Project</a>
          </li>
          <li>
            <a href="{{ route('category') }}">Categories</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
