@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif

            @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>{{ session('status') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="img[]" class="form-control" multiple>
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        @foreach($galleries as $gallery)
            <div class="col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="{{asset('/image/' . $gallery->name)}}" style="height:230px" alt="image"
                    />
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="{{asset('/image/' . $gallery->name)}}" target="_blank" class="btn btn-outline-info">View</a>
                                <a href="{{ url($gallery->id . '/download') }}" class="btn btn-outline-success">Download</a>
                            </div>
                            <a href="{{ url($gallery->id . '/delete') }}" 
                                onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-outline-danger">Delete</a>
                        </div>
                    </div>  
                </div>     
            </div>
        @endforeach
    </div>
</div>
@endsection
