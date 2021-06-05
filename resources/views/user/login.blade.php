@extends('master')



@section('login')

<div class="custome-login">
<form action="{{'login-user'}}" method="post" class="form-signin col-sm-4 offset-4 ">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal text-center"><span class="display-4 font-weight-bold">LOGIN</span></h1>
      @if($errors->any())
        <h4>{{$errors->first()}}</h4>
      @endif
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control mt-4"  required>
      <div class="checkbox mb-3 mt-2 text-right">
        <label>
         <a href="/reset-password"> Forgot Password?</a>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>
</div>



@endSection