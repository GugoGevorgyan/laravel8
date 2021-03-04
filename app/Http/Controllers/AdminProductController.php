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
        $products =  Product::with('categories')->paginate(8);
        return response()->view('admin/product/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        return response()->view('admin/product/create',['subCategories'=>$subCategories,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(AdminProductRequest $request)
    {
        if (!$request->subCategory){
            return redirect()->back()->with(['message' => 'Select a category']);
        }
        $productCategoryId = Category::with('category')->find($request->subCategory[0])->category->id;
        $sub = $request->subCategory;
        array_push($sub,strval($productCategoryId));
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
        $product->category_id = $request->category_id;
        $product->save();
        $product->categories()->attach($sub);
        return redirect('admin/product')->with(['message' => 'The product was successfully created']);
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
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $product = Product::with('categories')->find($id);
        return response()->view('admin/product/edit', ['product' => $product, 'categories'=>$categories,'subCategories'=>$subCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(AdminProductRequest $request, $id)
    {
        $product = Product::find($id);
        $prodSub = $product->categories->map(function ($product){
            return $product->id;
        });
        if (!$request->subCategory){
            return redirect()->back()->with(['message' => 'Select a category']);
        }
        $productCategoryid = Category::with('category')->find($request->subCategory[0])->category->id;
        $sub = $request->subCategory;
        $sub[] = $productCategoryid;

        if (isset($request->img) && $request->img->getClientOriginalName()) {
            $ext = $request->img->getClientOriginalExtension();
            $file = rand(1, 100) . time() . "." . "$ext";
            $request->img->storeAs('public/images', $file);
        } else {
            $file = Product::find($id)->img;
        }
            $product->categories()->detach($prodSub);
        $product->categories()->attach($sub);
        $product->update([
            'img' => $file,
            'name' => $request->name,
            'price' => intval($request->price),
            'sale' => intval($request->sale),
            'description' => $request->description,
//            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);
        return redirect('admin/product')
            ->with(['message' => 'The product was successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
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
