

@extends('layouts.admin')
@section('title')all Category @endsection
@section('content')
<div id="main-content" class="container-fluid">
    <div class="row all">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Category!</h1>
                </div>
                <a class="btn btn-primary" href="{{route('categories.create')}}">Add Category!</a>
            </div>
        </div>
    </div>
    <div class="row">
        @if (Session::has('success'))
        <div class="card col-lg-12 mb-4 py-3 border-left-success">
            <div class="card-body">
                {{Session::get('success')}}
            </div>
        </div>
        @endif
        <div class="container">
            <table class="table m-5">
                <thead>
                    <tr>
                        <th scope="col">Category Picture</th>
                        <th scope="col">Category name</th>
                        <th scope="col">desc</th>
                        <th scope="col">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td><img src="{{asset('uploads/products/' . $category->cat_img)}}"
                                style="max-width: 68%; border-bottom-width:0"></td>
                        <th>{{$category->cat_name}}</th>
                        <td>{{$category->cat_des}}</td>
                        <td class="d-flex tablestyle">
                            <div class="box" >
                                <a class="btn btn-info m-1" href="{{route('categories.show' , $category->id)}}">Show</a>
                            <a class="btn btn-warning m-1"
                                href="{{route('categories.edit' , $category->id)}}">Edit</a>
                            <form method="POST" action="{{route('categories.destroy' , $category->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-danger m-1" value="Delete">
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>

        <div class="container" style="text-align: center">
            {{$categories->links()}}
        </div>
        @endsection




        