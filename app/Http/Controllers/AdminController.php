<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use App\models\admin;
use App\Models\product;

class AdminController extends Controller
{
 function admin(Request $req)
{
    $admin= admin::where(['email'=>$req->email,'password'=>$req->password])->first();
    if(!$admin)
    {
        echo "username and password not match";
        return redirect('admin');

    }
    else {
        $req->session()->put('admin',$admin);
        return redirect('dashboard');
    }
}
// function register(Request $req){
// $admin = new admin;
// $admin->name=$req->name;
// $admin->email=$req->email;
// $admin->password=Hash::make($req->password);
// $admin->save();
// return redirect('admin');
// }

 function dashboard(){
    $data = product::all();
    return view('dashboard',['products'=>$data]);
}  
function addproAdmin(){
    return view('newpro');
}

function allAdd(Request $req){

    $req->validate([
        'name'=>'required',
        'price'=>'required',
        'category'=>'rexquired',
        'description'=>'required'

      ]);
    
    $product = new product;
    $product->name=$req->name;
    $product->price=$req->price;
    $product->category=$req->category;
    $product->gallary=$req->gallary;
    $product->description=$req->description;
    $product->save();
    
return redirect('admin');
    
} 
function deleteAdmin($id){
    product::destroy($id);
    return redirect('dashboard'); 

}
}
