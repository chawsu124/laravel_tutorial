<!-- <div class="container-fluid bg-grey ">
    <nav class="container navbar navbar-expand-lg">
    
        <a class="navbar-brand fs-3 fw-bold text-white" href="{{url('/home/Waifer/Myanmar')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
            <!-- </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success text-white" type="submit">Search</button>
            </form>
        </div>
    
    </nav>
</div> -->

<div class="container-fluid bg-dark">
<nav class="container navbar navbar-expand-lg">
  
    <a class="navbar-brand fs-3 fw-bold text-white" href="{{url('/')}}">
    <i class="fa-sharp fa-solid fa-shop"></i> Shopkeeper
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">
            <i class="fa-solid fa-sitemap"></i> Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">
            <i class="fa-solid fa-podcast"></i> Brand</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i> Cart
            @if(session('items'))
              {{count(session('items'))}}
            @endif
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('products/create')}}">Create</a></li>
            <li><a class="dropdown-item" href="#">View All Products</a></li>
            <li><a class="dropdown-item" href="#">Edit</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-users"></i> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
            <li><a class="dropdown-item" href="#">Register</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled text-white">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form> -->
    </div>
    </nav>
</div>
