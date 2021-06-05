<?php
use App\Http\Controllers\ProductController;

if(Session::has('user'))
{
  $totalCartItems = ProductController::cartItems();
}
else {
  
  $totalCartItems=0;
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="assets/images/logo.png" alt="" width="70px">
  <a class="navbar-brand" href="/home">Home</a>
  @if(Session::has('user'))
  <a class="navbar-brand" href="/myorders">My Orders</a>
  @endif
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 
  
      <form action="/search" class="form-inline my-2 my-lg-6 ">
        <input name="q" class="form-control mr-sm-2 search-box"  type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

    </ul>
    
    <ul class="navbar-nav">
   
      <li class="nav-item active">
     <a href="/cartlist" style="text-decoration:none"><i class="bi bi-cart-fill text-white mr-5 cart-icon">
      @if(Session::has('user'))
      {{$totalCartItems}}
      @endif
    </i></a>
     
          @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
              {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">logout</a>
            </div>
          </li>
          @else
          <a class="btn btn-primary" href="/login">Login</a>
          <a class="btn btn-danger" href="/register">Register</a>
          @endif
      </li>
    </ul>
  </div>
</nav>