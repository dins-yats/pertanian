{{-- style="background-color:#e8f5e9" --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
    <div class="container">
      <a class="navbar-brand" href="/">Siketan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }} " href="/">Home</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }} " href="/blog">Posts</a>
          </li>  
        </ul> --}}
        
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('/') ? 'active' : ''}} " href="/">Home</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('posts') ? 'active' : ''}} " href="/posts">Artikel</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('categories') ? 'active' : ''}} " href="/categories">Kategori</a>
        </li> 
      </ul>
        
      @auth
      <div class="flex-shrink-0 dropdown ms-auto navbar-dark">
        
        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back , {{ Auth()->user()->nama_poktan }}
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"></i> Logout</button>
            </form>
          </li>
    
        </ul>
      </div>
      @else
      <div class="col-md-3 text-end ms-auto">
        <a href="/login" class="btn btn-outline-light me-2  {{ ($title === "login") ? 'active' : '' }}">Login</a>
      </div>
      {{-- <li class="nav-item">
        <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}">Login</a>
      </li> --}}
      @endauth




      </div>
    </div>
  </nav>
  