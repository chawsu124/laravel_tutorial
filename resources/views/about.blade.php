@extends('layout.master')

@section('title','About')

@section('content') <!-- start following code to show in content-->

    <div class="container mt-5">
        <div class="row">
            <h1>I am About Page</h1>
            @if(count($persons) > 0) <!--start if -->
                <ul>
                @foreach($persons as $per) <!--start foreach loop -->
                    <li>{{$per}}</li>
                @endforeach <!-- end foreach loop-->
                </ul>
            @endif <!--end if -->
        </div>
    </div>

@endsection <!--end code to show in content -->



<!-- these codes are write test in home.blade.php file
<div>
    <h3>I am Home page. Name is {{$name}} and Country is {{$country}}</h3>
</div> 
-->