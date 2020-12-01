<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home(){
        return view('product.home');
    }

    public function index(){
        $products = Product::getProducts();
        return view('product.index', compact('products'));
    }

}
