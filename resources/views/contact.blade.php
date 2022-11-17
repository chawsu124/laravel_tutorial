@extends('layout.master')

@section('title','Contact')

@section('content')

    <div class="container mt-3">
        <h1>I am contact Page</h1>
        <div class=" mt-5">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
        </div>

        <div class=" mt-5">
            <div class="card">
                <h3 class="card-header text-center">Hello</h3>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores officiis similique laborum voluptates commodi labore! Iste, exercitationem sit facilis iure accusantium rerum dicta, error est at quasi quis ex quo!
                </div>
                <div class="card-footer text-center">
                    Copyright &copy; 2022 CSA
                </div>
            </div>
        </div>
    </div>

@endsection