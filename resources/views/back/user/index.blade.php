@extends('main.master')

@section('title','Users')

@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <h3 class="text-center">Users</h3>
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge text-bg-success badge-lg">{{ $role->role }}</span>
                            @endforeach
                        </td>
                        <td>
                            @foreach(Auth::user()->roles as $role)
                                @if($role->role == 'Manager')
                                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" class="btn btn-info">ManageRole</a>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection