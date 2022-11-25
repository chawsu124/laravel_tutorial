@extends('layout.master') <!--  extends from master.blade.php -->

@section('title','Home')<!--  show 'Home' instead of 'title' in master.blade.php -->

@section('content')<!-- start show all following code in 'content' in master.blade.php -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3 text-white mt-4">
                <div class="accordion bg-dark accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Categories
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Brand
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accounts
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
                <!-- <nav class="sidebar bg-dark card py-2 mb-4">
                    <ul class="nav flex-column" id="nav_accordion">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Link name </a>
                        </li>
                        <li class="nav-item has-submenu">
                            <a class="nav-link" href="#"> Submenu links  </a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link" href="#">Submenu item 1 </a></li>
                                <li><a class="nav-link" href="#">Submenu item 2 </a></li>
                                <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item has-submenu">
                            <a class="nav-link" href="#"> More menus  </a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link" href="#">Submenu item 4 </a></li>
                                <li><a class="nav-link" href="#">Submenu item 5 </a></li>
                                <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                                <li><a class="nav-link" href="#">Submenu item 7 </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Something </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Other link </a>
                        </li>
                    </ul>
                </nav> -->
            </div>
            
            <div class="col-md-9">
                <div class="row">
                <h2 class="text-white">Contents</h2>
                <!-- Show product item from DB by receiving products data from PageController -->
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <!-- for one image -->
                            <img class="card-img-top" src="{{asset('/uploads/' . $product->imgs)}}" style="height:230px" alt="image" />
                            <!-- for multiple image -->
                            
                            <div class="card-body">
                                <h3 class="text-center">{{$product->title}}</h3>
                                <p >
                                    {{substr($product->description,0,100)}}
                                </p>
                            </div> 
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-outline-secondary">View</a>
                                        <a href="{{action('App\Http\Controllers\PageController@add',$product->id)}}" class="btn btn-secondary">Cart</a>
                                    </div>
                                    <div class="text-primary">Price ${{$product->price}}</div>
                                </div>
                            </div>            
                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </div>
    </div>
@endsection    
