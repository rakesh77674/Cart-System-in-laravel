@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
@if(Session::has('cart'))
         <div class="row">
             <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <div class="list-group">
                     @foreach ($products as $product)
                         <li class="list-group-item">
                             <span class = "badge">{{$product['qty']}}</span>
                             <strong>{{$product['item']['title']}}</strong>
                             <span class = "label-label-sucess">{{$product['price']}}</span>
                             <div class="btn-group">
                                 <button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class = "caret"></span></button>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">Reduce by 1</a></li>
                                     <li><a href="#">Reduce All</a></li>
                                 </ul>
                             </div>
                         </li>
                     @endforeach
                 </div>
             </div>
         </div>
         <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <strong>Total: {{$totalPrice}}<strong>
            </div>
         </div><div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <button type="button" class="btn btn-success">Checkout</button>
            </div>
         </div>

@else
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>No items in Cart</h1>
        </div>
        </div>

@endif
@endsection