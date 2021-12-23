@extends('layouts.user')
@section('title') Cart @endsection
@section ('content')

<div class="container">
    <div class="row">
        @if ($cart)
            <div class="col-sm-6">
                @foreach ($cart->items as $product)
                    <div class="card-md-2">
                        <div class="card-body">
                            <img src="{{asset('uploads/products/' . $product['pimg'])}}" alt="">
                            <h5 class="card-title">{{$product['pname']}}</h5>
                            <div class="card-text">
                                {{$product['pprice']}}
                                <a href="" action="" class="btn btn-danger btn-sm ml-4">Remove</a>
                                <input type="text" name="qty" id="qty" value="{{$product['qty']}}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">

            </div>
                
            @else
                <p>There are no items in the cart</p>
        @endif
    </div>
</div>
@endsection