<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;

class Cart
{
    //
    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __Construct($cart = null)
    {
        if($cart){
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        }else{
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    

    public function add($product){
        $item = [
            'pimg' => $product->pimg,
            'pname' => $product->pname,
            'pprice' => $product->pprice,
            'qty' => 0
        ];
        if(!array_key_exists($product->id , $this->items)){
            $this->items[$product->id] = $item;
            $this->totalQty +=1;
            $this->totalPrice += $product->pprice;
        }else{
            $this->totalQty +=1;
            $this->totalPrice += $product->pprice;
        }

        $this->items[$product->id]['qty'] += 1;
    }
}
