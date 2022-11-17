<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product; // Declaration // using Product.php file// Using Product Model

class PageController extends Controller
{
    public function index()
    {
        $products = Product::all();// get all information of products table in DB
        return view('home',compact('products'));// send this data to home.blade.php in views folder
    }

    public function add(Request $request,$id){
        // return "Customer click on add to cart button with id is : " . $id;
        $items = array();// create empty array

        if($request->session()->has('items')){// if session 'items' have
            $items = $request->session()->get('items');

            if(!in_array($id,$items)){// if 'id' have in this $items get from session 'items'
                array_push($items,$id);
            }
        }else{// if session 'items' does not have
            array_push($items,$id);
        }

        // firstly see website action
        $request->session()->put('items',$items);

        // delete all session in this site
        //$request->session()->flush();

        // return to home with data
        $products = Product::all();// get all information of products table in DB
        return view('home',compact('products'));// send this data to home.blade.php in views folder
    }
}
