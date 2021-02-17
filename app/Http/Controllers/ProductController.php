<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){ 
    $data = product::all();
    return view('product',['products'=>$data]);
}
function detail($id){ 
 $data= product::find($id);
 return view('detail',['product'=>$data]);
}
function search(Request $req){ 
    
$data= product::where('name','like', '%'.$req->input('query').'%')->get();
return view('search',['products'=>$data]);
   }


   function addToCart(Request $req){ 

    if($req->session()->has('user'))
    {
        $cart= new Cart;
        $cart->user_id =$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }
    else{
        return redirect('/login');
    }
}
static function cartItem()
{
 $userId=Session::get('user')['id'];
 return Cart::where('user_id',$userId)->count();

}
function cartList(){
    $userId=Session::get('user')['id'];
 $products= DB::table('cart')
 ->join('products','cart.product_id', '=',"products.id")
 ->where('cart.user_id',$userId)
 ->select('products.*','cart.id as cart_id')
 ->paginate(3);
 return view('cartList',['products'=>$products]);
}
function remove($id){
    Cart::destroy($id);
    return redirect('cartList');
}
function order(){ 
$userId=Session::get('user')['id'];
$total= DB::table('cart')
->join('products','cart.product_id', '=',"products.id")
->where('cart.user_id',$userId)
->sum('products.price');
return view('orderNow',['total'=>$total]);
}
function orderplace(Request $req){
    $userId=Session::get('user')['id'];
   $allCart =Cart::where('user_id',$userId,)->get();
   foreach($allCart as $cart){
    $order= new Order;
     $order->product_id= $cart['product_id'];
     $order->user_id= $cart['user_id'];
     $order->status= "panding";
     $order->payment_method= $req->payment;
     $order->payment_status= "panding";
     $order->address= $req->address;
     $order->save();
     Cart::where('user_id',$userId,)->delete();
   }
   return redirect('/');
}
function myOrder(){
    $userId=Session::get('user')['id'];
$orders=  DB::table('orders') 
->join('products','orders.product_id', '=',"products.id")
->where('orders.user_id',$userId)
->get();
return view('myorder',['orders'=>$orders]);
}
}
