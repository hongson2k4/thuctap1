<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return response()->json(product::all());
    }
    public function store(Request $request){
        $product = product::create($request->all());
        return response()->json($product,201);
    }
    public function show($id){
        $product = product::find($id);
        if(is_null($product)){
            return response()->json(['message'=>'Product Not Found'],404);
        }
        return response()->json($product);
    }
    public function update(Request $request,$id){
        $product = product::find($id);
        if(is_null($product)){
            return response()->json(['message'=>'Product Not Found'],404);
        }
        $product->update($request->all());
        return response()->json($product);
    }
    public function destroy($id){
        $product = product::find($id);
        if(is_null($product)){
            return response()->json(['message'=>'Product Not Found'],404);
        }
        $product->delete();
        return response()->json(null,204);
    }
}
