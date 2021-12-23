<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class DashboardController extends Controller
{
    //
    public function index(){
        $user = DB::table('users')->get()->count();
        $product = DB::table('products')->get()->count();
        $category = DB::table('categories')->get()->count();
        return view("admin.dashboard" , compact('user','product','category'));
        
    }
}
