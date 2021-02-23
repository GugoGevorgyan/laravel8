<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products = Product::paginate(8);
        return response()->view('admin/product/index',['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'img' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:960',
            'description' => 'required|max:255',
        ]);

        $products = new Product();
        if(isset($request->img) && $request->img->getClientOriginalName()){
            $ext = $request->img->getClientOriginalExtension();
            $file = rand(1,100).time()."."."$ext";
            $request->img->storeAs('public/images', $file);
        }else{
                $file = '';
        }
        $products->img = $file;
        $products->name = $request->name;
        $products->price = intval($request->price);
        $products->description = $request->description;
        $products->user_id = Auth::id();
        $products->save();
        return response()->view('admin/product/index',['products'=> Product::all(), 'message' => 'The product was successfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id,'edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
