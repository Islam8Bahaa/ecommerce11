@extends('layouts.admin')
@section('title') Edit Category @endsection
@section ('content')
<div class="container">


    <!-- Nested Row within Card Body -->
    <div id="main-content" class="container-fluid">
        <div class="row all">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Update Prodcut!</h1>
                    </div>
                    <form method="POST" action="{{route('products.update',$products->id)}}" class="user m-5"
                        enctype="multipart/form-data">
                        <div class="form-group row">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-group ">
                                <label for="formFile" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="formFile" name="pimg">
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-user" name="pname"
                                    value="{{$products->pname}}">
                                @error('pname')
                                <small class="text-danger"> {{$message}} </small>
                                @enderror
                                <!-- <div class="form-group ">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" rows="5" id="comment" name="p_des"></textarea>
                                    @error('p_des')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div> -->
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="pprice"
                                        value="{{$products->pprice}}">
                                    @error('pprice')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <input type="submit" value="Update Product" class="btn btn-primary btn-user btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection