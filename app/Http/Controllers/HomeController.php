<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('shop.index',compact('product'));
    }
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getshoppingCart(){
        
        $oldCart =Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shoppingCart',['products'=> $cart->items, 'totalPrice'=> $cart->totalPrice]);
        
    }
}
