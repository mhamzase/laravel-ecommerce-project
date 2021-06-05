@extends('master')




@section('register')



<div class="custom-register">
     
      
      <form action="/register-user" method="post" class="form-signin col-sm-4 offset-4 ">
           

            @csrf
            <h1 class="h3 mb-3 font-weight-normal text-center"><span class="display-4 font-weight-bold">SIGN UP</span></h1>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
            </div>
            @endif

            <input type="text" name="name" id="name" class="form-control mt-4" placeholder="Name"  autofocus>
                 
            <input type="email" name="email" id="email" class="form-control mt-4" placeholder="Email"  autofocus>
                     

            <input type="password" name="password" id="password" placeholder="Password" class="form-control mt-4"  >
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="form-control mt-4"  >
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Regsiter</button>
      </form>
</div>









@endSection