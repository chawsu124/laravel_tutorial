@extends('main.master')

@section('title','Edit User Role')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="p-3 mt-5 rounded">
            <h3 class="card-header text-center fw-bold">Edit User Roles</h3>
            <form method="post">
                {{csrf_field()}}
                <h5 class="mt-3">User :</h5>
                <div class="form-group">
                    <input type="text" name="name" value="{{ $user->name }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <h5 class="mt-3">Roles :</h5>
                @foreach($roles as $role)
                    <div class="form-group mt-2">
                        <input type="checkbox" name="role_ids[]" value="{{ $role->id }}" 
                            id="label{{ $role->id }}"
                            @foreach($user->roles as $userRole)
                                @if($userRole->role == $role->role)
                                    checked
                                @endif
                            @endforeach
                        >
                        <label for="label{{ $role->id }}" class="fw-semibold">{{ $role->role }}</label>
                    </div>
                @endforeach
                <button class="btn btn-primary mt-3">Add Role</button>  
            </form>
        </div>
    </div>

@endsection