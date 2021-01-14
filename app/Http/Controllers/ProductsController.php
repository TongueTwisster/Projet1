<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    function index()
    {
        $data = Products::all();
        return view('explore', ['products'=>$data]);
    }

    function details($id) {
        $data = Products::find($id);
        return view('details', ['products'=>$data]);
    }

    function search(Request $req) {
        $data = Products::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }
}
