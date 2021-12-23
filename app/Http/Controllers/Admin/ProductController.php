<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To show all products
        $products = Product::paginate(5);
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.create', compact('products', 'categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all() , [
            // 'cat_id' => ['required'],
            'pimg' => ['required'],
            'pname' => ['required', 'min:3' , 'max:225'],
            'pprice' => ['required'],
            // 'p_des' => ['required' ],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $products = new Product();
        $products->cat_id = $request->input('cat_id');
        $products->pname = $request->input('pname');
        $products->pprice = $request->input('pprice');
        // $products->p_des = $request->input('p_des');
        if($request->hasFile('pimg')){
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $products->pimg = $filename;
        }
        else{
            return $request;
            $products->pimg = '';
        }
        $products->save();
        return redirect()->back()->with(['success' => 'Product has been added']);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::findOrFail($id);
        return view('admin.products.show' , compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::findOrFail($id);
        return view('admin.products.edit' , compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all() , [
            'pimg' => ['required'],
            'pname' => ['required', 'min:4' , 'max:225'],
            'pprice' => ['required'],
            // 'p_des' => ['required'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $products = Product::findOrFail($id);
        $products->pname = $request->input('pname');
        $products->pprice = $request->input('pprice');
        // $products->p_des = $request->input('p_des');

        if($request->hasFile('pimg')){
            $file = $request->file('pimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $products->pimg = $filename;
        }
        else{
            return $request;
            $products->pimg = '';
        }
        $products->update();
        return redirect()->back()->with(['success' => 'Product has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->back()->with(['success' => 'Product has been deleted']);
    }
}
