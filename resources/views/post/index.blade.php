@extends('main.master')

@section('title','Create Post')

@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="d-flex justify-content-between">
            <h3>Posts List</h3>
            <a href="{{ url('/posts/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create</a>
        </div>
        <!-- Show Success Alert Message -->
        @if(session('successMsg'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('successMsg') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ url('/posts/' . $post->id . '/edit') }}" 
                                class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ url('/posts/' . $post->id . '/delete') }}"
                                onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection