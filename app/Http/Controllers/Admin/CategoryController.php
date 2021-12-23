<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(5);
        return view('admin.categories.allcategories' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.categories.addcategory");
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
            'cat_img' => ['required'],
            'cat_name' => ['required', 'min:3' , 'max:225'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $categories = new Category();
        $categories->cat_name = $request->input('cat_name');
        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/' , $filename);
            $categories->cat_img = $filename;
        }
        else{
            $categories->cat_img = '';
            
        }
        $categories->save();
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
        $categories = Category::findOrFail($id);
        return view('admin.categories.allcategories' , compact('categories'));
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
        $categories = Category::findOrFail($id);
        return view('admin.categories.editcategory' , compact('categories'));
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
            'cat_name' => ['required', 'min:4' , 'max:225'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $categories = Category::findOrFail($id);
        $categories->cat_img = $request->input('cat_img');
        $categories->cat_name = $request->input('cat_name');

        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/categories/' , $filename);
            $categories->cat_img = $filename;
        }
        else{
            return $request;
            $categories->cat_img = '';
        }
        $categories->update();
        return redirect()->back()->with(['success' => 'Category has been updated']);
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
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with(['success' => 'Category has been deleted']);
    }
}
