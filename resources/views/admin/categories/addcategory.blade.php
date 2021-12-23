@extends('layouts.admin')
@section('title') Create Category @endsection
@section('content')
<div class="container">
    <div id="main-content" class="container-fluid">
        <div class="row all">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an category!</h1>
                </div>
                {{-- {{}} => echo --}}
                {{-- {{url('admin/user')}} --}}
                <form method="POST" action="{{route('categories.store')}}" class="user">
                    <div class="row">
                        @if (Session::has('success'))
                        <div class="card form-group  border-left-success">
                            <div class="card-body">
                                {{Session::get('success')}}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group row">
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        @csrf
                        <div class="form-group row">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="formFile" name="cat_img">
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" name="cat_name"
                                placeholder="username">
                            @error('cat_name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    
                    

                    </div>
                    <input type="submit" value="Add" class="btn btn-primary btn-user btn-block">
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
