<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="dashboard"><b>Church</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" aria-current="page" href="dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Events") ? 'active' : '' }}" href="events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Media") ? 'active' : '' }}" href="media">Media</a>
          </li> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Events</a></li>
              <li><a class="dropdown-item" href="#">Media</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> 
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </form>
      </div>
    </div>
  </nav> 