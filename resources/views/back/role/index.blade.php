@extends('main.master')

@section('title','Roles')

@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <h3 class="text-center">Roles</h3>
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection