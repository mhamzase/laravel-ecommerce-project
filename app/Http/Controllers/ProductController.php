<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productDetail($id){
        $details = Product::find($id);
        return view('product.product-detail',['product'=>$details]);
    }

    public function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input('q').'%')->get();
        return view('product.search',['products'=>$data],['q'=>$request->input('q')]);
    }

    public function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/cartlist');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItems()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList(Request $request){
        if($request->session()->has('user'))
        {
            $userId = Session::get('user')['id'];

            $cartListItems = Cart::join('products','cart.product_id','products.id')->select('products.*','cart.id as cart_id')->where('user_id',$userId)->get();

            return view('product.cartlist',['cartItems'=>$cartListItems]);
        }
        else
        {
            return redirect('/logout');
        }
    }

    public function removeCartItem($cart_id){
        Cart::destroy($cart_id);
        return redirect('/cartlist');
    }

    public function orderNow(){
        $userId = Session::get('user')['id'];

        $totalPrice = Cart::join('products','cart.product_id','products.id')->where('user_id',$userId)->sum('products.price');

        return view('product.ordernow',['totalPrice'=>$totalPrice]);
    }

    public function orderPlace(Request $request){
        $userId = Session::get('user')['id'];
        $cartItems = Cart::where('user_id',$userId)->get();


        foreach($cartItems as $item)
        {
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];
            $order->shipping_address = $request->shipping_address;
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();

        return redirect('/myorders');
    }


    public function myOrders()
    {
        $userId = Session::get('user')['id'];
        $myorders =  Order::join('products','orders.product_id','products.id')->where('orders.user_id',$userId)->get();

        return view('product.myorders',['myorders'=>$myorders]);
    }


    public function buyNow(Request $request)
    {
        if($request->session()->has('user'))
        {
            $product_id = $request->product_id;
            $productDetail = Product::select('*')->where('id',$product_id)->get(); 

            return view('product.buynow',['productPrice' => $productDetail]);
        }
        else{
            return redirect('/login');
        } 
    }

    public function orderProduct(Request $request)
    {
        $userId = Session::get('user')['id'];

        $order = new Order;
        $order->product_id = $request->product_id;
        $order->user_id = $userId ;
        $order->shipping_address = $request->shipping_address;
        $order->status = "pending";
        $order->payment_method = $request->payment;
        $order->payment_status = "pending";
        $order->save();

        return redirect('/myorders');
    }
}
