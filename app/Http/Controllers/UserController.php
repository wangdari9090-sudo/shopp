<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        if(Auth::check() && Auth::user()->user_type == 'user'){
            return view('dashboard');
        }
        else if(Auth::check() && Auth::user()->user_type == 'admin'){

            return view('admin.dashboard');
        }
    }
    public function home(){
        $products = Product::latest()->take(4)->get();
        $collections = Product::inRandomOrder()
        ->take(4)
        ->get();
        return view('index',compact('products', 'collections'));

    }
   public function productDetails($id)
    {
        $product = Product::with('category')->findOrFail($id);

        $related = Product::where('product_category', $product->product_category)
                        ->where('id', '!=', $id)
                        ->take(6)
                        ->get();

        return view('product_details', compact('product', 'related'));

    }


}
