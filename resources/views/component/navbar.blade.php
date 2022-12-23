<nav class="navbar navbar-expand-lg sec-bg navbar-light">
    <div class="container-lg py-1">
      <a class="navbar-brand fw-bold" href="/">Shoe<span class="primary-color">Nova</span></a>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-semibold text-uppercase" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-uppercase" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-uppercase" href="/shop">Shop</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav ms-auto flex-row">
        <li class="nav-item d-flex align-items-center mx-2 d-block">
            <a href="/cartlist"><i class="uil uil-shopping-cart-alt text-dark fs-4"></i></a>
        </li>

        @if(Session::has('user'))
        <div class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
              @if((Session::has('user')))
              <li><a class="dropdown-item" href="/history">Purchase History</a></li>
              @endif
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </div>
        @else
        <li class="nav-item mx-2">
          <a class="nav-link btn btn-gradients fw-bold px-3 py-2" href="/login">Login</a>
        </li>
        @endif

        @if(!(Session::has('user')))
        <li class="nav-item mx-2">
          <a class="nav-link btn btn-gradients fw-bold px-3 py-2" href="/register">Register</a>
        </li>
        @endif
        
      </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>
