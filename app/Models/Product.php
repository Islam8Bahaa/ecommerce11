<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable =[
        'pimg' , 'pname' , 'pprice' , 'p_des' , 'cat_id' 
    ];
    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }

}
