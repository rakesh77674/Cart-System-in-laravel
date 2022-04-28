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
        dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }
}
