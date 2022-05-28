<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function index()
    {
        $data=Product::get();
        return view('Admin.index', compact('data'));
    }

    public function create()
    {
        $data=Product::get();
        $kategori=Category::get();
        return view('Admin.create', compact('data', 'kategori'));
    }

    public function store(Request $request)
    {
        Product::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'user_id'=>$request->user_id,
            'prince'=>$request->prince,
            'excerpt'=>$request->excerpt
        ]);

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $data=Product::where('id', $id)->first();
        $kategori=Category::get();
        return view('Admin.edit', compact('data', 'kategori'));
    }

    public function update(Request $request,$id)
    {
       $data=Product::where('id', $id)->first();
       $data->title=$request->title;
       $data->category_id=$request->category_id;
       $data->user_id=$request->user_id;
       $data->images=$request->images;
       $data->prince=$request->prince;
       $data->excerpt=$request->excerpt;
       
       $data->update();

       return redirect()->route('index');
    }
    
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('index');
    }

}

