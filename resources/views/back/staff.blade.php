@extends('main.master')

@section('title','Manager')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-5"></div>
            <div class="col-md-8 mt-5">
                <div class="card">
                    <h3 class="card-header">Staff Dashboard</h3>
                    <div class="card-body">
                        <ul>
                            <li>Name: {{ Auth::user()->name }}</li>
                            <li>Name: {{ Auth::user()->email }}</li>
                            <li>
                                Roles:
                                @foreach(Auth::user()->roles as $role)
                                    <span class="badge text-bg-success badge-lg">{{ $role->role }}</span>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
                <hr>
                <a href="{{ url('/admin/normal_users') }}" class="btn btn-primary">Normal_User Dashboard</a>
            </div>
            <div class="col-md-2 mt-5">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')">Logout</button>
                </form>
            </div>
        </div>
    </div>

@endsection