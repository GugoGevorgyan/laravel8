<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class   HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hot_sales = Product::where('status',1)->paginate(4);
        $computers = Product::where('status',1)->paginate(8);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();

        $brands = ['image10.png', 'image15.png', 'image16.png', 'image17.png', 'image18.png', 'image19.png'];
        $figcaption = ['Earbuds', 'Headphones', 'Speakers', 'Keyboards', 'Mouses', 'Airpods'];
        $imgs = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png'];
        return response()->view('home/index', ['imgs' => $imgs, 'figcaption' => $figcaption,
            'hot_sales' => $hot_sales, 'computers' => $computers, 'brands' => $brands,
            'categories'=>$categories,'subCategories'=>$subCategories]);
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
        $computers = Product::where('status',1)->paginate(20);
        $similar = Product::where('status',1)->paginate(4);
        return response()->view('home/product', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(2);
        $similar = Product::where('status',1)->paginate(4);
        return response()->view('home/favorites', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories]);
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
        $computers = Product::where('status',1)->paginate(4);
        $colors = ['#F03A4B', '#000000', '#2672FF', '#74AB2E', '#C31FEC', '#EABD1C'];
        $product = Product::find($id);
        return response()->view('home.productSinglePage',
            ['product' => $product, 'colors' => $colors, 'computers' => $computers,
                'categories'=>$categories,'subCategories'=>$subCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cart()
    {
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(2);
        $similar = Product::where('status',1)->paginate(4);
        return response()->view('home/cart', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories]);
    }

    public function shipping()
    {
        return view('home/shipping');
    }

    public function orderNow()
    {
        return view('home/orderNow');
    }
    /**
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function prod($prod)
    {
        $ProductSubCategory = Category::with('products')->where('name',$prod)->first();
        $checkCategoryProducts = Category::with('prods')->where('name',$prod)->first();
        $categoryProducts = $checkCategoryProducts->prods()->where('status',1)->paginate(20);
        if (isset($categoryProducts[0]->name)){
            $computers = $categoryProducts;
        }else{
            $computers = $ProductSubCategory->products()->where('status','=',1)->paginate(20);
        }

        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $productCategory = Category::with('category')->where('name', '=',$prod)->first()->category;

        $similar = Product::where('status',1)->paginate(4);
        if (isset($productCategory)){
            $productCategory = $productCategory->name;
        }else{
            $productCategory = $prod;
        }
        return response()->view('home/product', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories,'productCategory'=>$productCategory ]);

    }
}
