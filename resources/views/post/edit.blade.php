@extends('main.master')

@section('title','Update Post')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="p-3 mt-5 rounded">
            <form method="post">
                {{csrf_field()}}
                <div class="card">
                    <h3 class="card-header text-center fw-bold">Update Post</h3>
                    <div class="card-body">
                        <div class="form-group mt-3">
                            <label class="fw-semibold">Title :</label>
                            <input type="text" name="title" value="{{ $post->title ?? old('title') }}"
                                class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-semibold">Content :</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Enter content" rows="3">
                                {{ $post->content ?? old('content') }}
                            </textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection