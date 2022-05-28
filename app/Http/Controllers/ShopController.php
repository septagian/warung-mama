<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ShopController extends Controller
{
    public function shopping()
    {
       
        $product=Product::latest();
        // dd(request('search'));
        if(request('search')) {

            $product->where('title', 'like', '%' . request('search') . '%');
        }
        $product=$product->get();
        return view('shop.shopping', compact('product'));   
    }

    public function gian($id)
    {   
        $post=Product::where('id', $id)->first();
        $detail=Product::get();
        return view('shop.detail', compact('post', 'detail'));
    }

    

}
