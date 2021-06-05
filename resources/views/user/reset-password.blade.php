@extends('master')



@section('reset-password')

<div class="custome-login">
<form action="{{url('/reset-user-password')}}" method="post" class="form-signin col-sm-4 offset-4 ">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal text-center"><span class="display-4 font-weight-bold">Reset Password</span></h1>
     
      <input type="email" name="email" id="inputEmail" class="form-control mt-5" placeholder="Email" required autofocus>
     
      <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Send Email</button>
</form>
</div>



@endSection