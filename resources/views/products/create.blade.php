@extends('layout.master')

@section('title','Create Products')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="bg-dark p-3 text-white mt-5 rounded">
            <form method="post" enctype="multipart/form-data">
                <!-- show each errors of each fields of form validation-->
                @foreach($errors->all() as $error) <!--use ProductInsertFormRequest to check empty data -->
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                <!-- show success message if 'status' session have -->
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('status')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <legend>Insert A New Product</legend>
                 {{csrf_field()}} <!--csrf_field() auto create for token -->
                <div class="form-group mt-3">
                    <label>Title :</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter your product title">
                </div>
                <div class="form-group mt-3">
                    <label>Price :</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter your product price">
                </div>
                <div class="form-group mt-3">
                    <label>Description :</label>
                    <textarea name="description" class="form-control" placeholder="Enter your product description" rows="3">
                    </textarea>
                </div>
                <div class="form-group mt-3">
                    <label>Image :</label><br>
                    <!-- Accept one or more image in Array form-->
                    <input type="file" name="img[]" multiple>
                </div>
                <button class="btn btn-secondary mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection