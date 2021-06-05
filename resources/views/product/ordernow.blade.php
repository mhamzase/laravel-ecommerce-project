@extends('master')


@section('ordernow')




<div class="col-sm-6 ordernow">
            <table class="table table-striped mt-5">
                  <tbody>
                    <tr>
                      <td>Price</td>
                      <td>{{$totalPrice}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Delivery Charges</td>
                        <td>200</td>
                     </tr>
                     <tr class="bg-dark text-light">
                        <td>Total Price</td>
                        <td>{{$totalPrice+200}}</td>
                     </tr>
                  </tbody>
                </table>


                <form action="/orderplace" method="post">
                  @csrf
                  <div class="form-group">
                        <textarea placeholder="Shipping Address" name="shipping_address" cols="82" rows="3" style="resize: none;outline:none;padding:5px"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Payment Methods : </label><br/>
                    <input type="radio" value="jazzcash" name="payment">&nbsp;Jazz Cash<br>
                    <input type="radio" value="easypaisa" name="payment">&nbsp;Easy Paisa<br>
                    <input type="radio" value="cash" name="payment">&nbsp; Cash On Delivery<br>
                  </div>
                  
                    <button type="submit" class="btn btn-primary">Order Now</button>
                 
                </form>
</div>



@endSection


