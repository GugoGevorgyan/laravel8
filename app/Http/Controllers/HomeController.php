<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class   HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(User::with('products')->findOrFail(Auth::id())->products->first()->pivot->favorite);
      return $this->checkProducts('Computers','index',8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(20);
        $similar = Product::where('status',1)->paginate(4);
        return response()->view('home/product', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories,'allCategories'=>$allCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->name === "heart"){

            $product = Product::findOrFail($request->value);
//            dd($product->users->contains(Auth::id())) ;
            if ($product->users->contains(Auth::id())){
                $favorite = $product->users()->where('user_id',Auth::id())->first()->pivot->favorite;
                $favorite = $favorite ? false : true;
                $product->users()->updateExistingPivot(Auth::user(),['favorite'=> $favorite]);
                return $favorite;
            }else{
                $product->users()->attach(Auth::id(),['favorite'=> true]);
                return true;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
//        $computers = Product::where('status',1)->paginate(20);

//        $computers = User::with('products')->findOrFail(Auth::id())->products->;
        $computers = User::with('products')->findOrFail(Auth::id())->products;
//        dd($computers);


        $similar = Product::where('status',1)->paginate(20);
        return response()->view('home/favorites', ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories,'allCategories'=>$allCategories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(20);
        $colors = ['#F03A4B', '#000000', '#2672FF', '#74AB2E', '#C31FEC', '#EABD1C'];
        $product = Product::find($id);
        return response()->view('home.productSinglePage',
            ['product' => $product, 'colors' => $colors, 'computers' => $computers,
                'categories'=>$categories,'subCategories'=>$subCategories,'allCategories'=>$allCategories]);
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
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(2);
        $cart = Session::has('cart') ? \session()->get('cart'):[];

//        return response()->view('user.show_cart', compact('cart'));


        $similar = Product::where('status',1)->paginate(4);
//dd($cart);
        return response()->view('home/cart',compact('cart','computers','similar','categories','subCategories','allCategories'));
    }

    public function shipping(Request $request)
    {
//        dd($request->summary);
        if ($request->summary === 'shipping') return view('home/shipping');
        if ($request->summary === 'sale' || $request->summary === null) return view('home/orderNow');
//        return view('home/shipping');
    }

    public function orderNow(Product $product)
    {
        return response()->view('home/orderNow',['product'=>$product]);
    }
    /**
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function prod($prod)
    {
       return $this->checkProducts($prod,'product',20);
    }
    public function homeProduct($prod){
       return $this->checkProducts($prod,'index',8);
    }

    public function checkProducts($prod, $page, $amount){

        $hot_sales = Product::where('status',1)->paginate(20);
//        dd($hot_sales[0]->users()->first()->id);
        $brands = ['image10.png', 'image15.png', 'image16.png', 'image17.png', 'image18.png', 'image19.png'];
        $figcaption = ['Earbuds', 'Headphones', 'Speakers', 'Keyboards', 'Mouses', 'Airpods'];
        $imgs = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png'];

        $allCategories = Category::all()->where('parent_id','=',Null);
        $products = Category::with('products')->where('name','=',$prod)->first();
        $computers = $products->products()->where('status','=',1)->paginate($amount);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $productCategory = Category::with('category')->where('name', '=',$prod)->first()->category;

        $similar = Product::where('status',1)->paginate(20);
        if (isset($productCategory)){
            $productCategory = $productCategory->name;
        }else{
            $productCategory = $prod;
        }
        return response()->view("home/$page", ['computers' => $computers, 'similar' => $similar,
            'categories'=>$categories,'subCategories'=>$subCategories,'productCategory'=>$productCategory,
            'imgs' => $imgs, 'figcaption' => $figcaption,'hot_sales' => $hot_sales,'brands' => $brands,
            'prod'=>$prod,'allCategories'=>$allCategories]);
    }

    public function addToCart(Request $request)
    {
        if (!empty($request->id)) {
            $product = Product::findorfail($request->id);
            $old_cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
//            $old_cart = null;
            $cart = new Cart($old_cart);
            $cart->add($product, $request->id);
            Session::put('cart', $cart);
//            session()->forget(['cart']);

        }
//        dd( $request->session()->get('cart'));
        return $this->checkProducts('Computers','index',8);
    }
}
