<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgb(211, 255, 251) !important;">
    <div class="container">
      <a class="navbar-brand col-3" href={{ route('home.view') }}>
        <img src="{{ asset('image/Logo.jpg') }}" alt="" style="width: 50px; height: 50px">
      </a>
      <div class="col-9 d-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav gap-3"> 
          {{-- gap-3 buat kasi jarak antar Home, Category, Writers --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('home.view')}}>Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href={{ route('category.view', 1) }}>Interactive Multimedia</a></li>
              <li><a class="dropdown-item" href={{ route('category.view', 2) }}>Software Engineer</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href={{ route('writer.view') }}>Writers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('aboutus.view') }}>About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('popular.view') }}>Popular</a>
          </li>   
        </ul>
      </div>
    </div>
  </nav>