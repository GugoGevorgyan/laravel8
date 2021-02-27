<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminProductRequest;
use App\Models\Category;
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
        $products =  Product::with('category')->paginate(8);
//        $prod = Product::with('category')->paginate(8)->get();

        return response()->view('admin/product/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('subCategory')->get();
        return response()->view('admin/product/create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminProductRequest $request)
    {
        $products = Product::paginate(8);
        $product = new Product();
        if (isset($request->img) && $request->img->getClientOriginalName()) {
            $ext = $request->img->getClientOriginalExtension();
            $file = rand(1, 100) . time() . "." . "$ext";
            $request->img->storeAs('public/images', $file);
        } else {
            $file = '';
        }
        $product->img = $file;
        $product->name = $request->name;
        $product->price = intval($request->price);
        $product->sale = intval($request->sale);
        $product->description = $request->description;
        $product->user_id = Auth::id();
        $product->category_id = $request->category_id;;
        $product->save();
        return response()->view('admin/product/index', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = Category::with('subCategory')->get();
        $product = Product::with('category')->find($id);
        return response()->view('admin/product/edit', ['product' => $product, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminProductRequest $request, $id)
    {

        $product = new Product();
        if (isset($request->img) && $request->img->getClientOriginalName()) {
            $ext = $request->img->getClientOriginalExtension();
            $file = rand(1, 100) . time() . "." . "$ext";
            $request->img->storeAs('public/images', $file);
        } else {
            $file = Product::find($id)->img;
        }
        $old_price = intval(Product::find($id)->price);

        if ( $old_price === intval($request->price) ){
            $old_price = null;
        }
        Product::find($id)->update([
            'img' => $file,
            'name' => $request->name,
            'price' => intval($request->price),
            'sale' => intval($request->sale),
            'old_price' => $old_price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);
        return redirect('product')->
        with(['message' => 'The product was successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name = Product::find($id)->name;
        Product::destroy($id);
        return redirect()->back()->with(['message' => 'you have successfully removed ' . $name . ' product ']);
    }

    public function status(Request $request, $id)
    {
        $status = Product::find($id)->status === '1' ? 0 : 1;
        Product::find($id)->update([
            'status' => $status,
        ]);
        return redirect()->back();
    }
}
