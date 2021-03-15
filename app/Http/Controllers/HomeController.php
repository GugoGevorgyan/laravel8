<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\DeclareDeclare;

class   HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $cart_session = session()->has('cart') ? session()->get('cart')->items : [];
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = User::with('products')->findOrFail(Auth::id())->products;

        $similar = Product::where('status',1)->paginate(20);
        return response()->view('home/favorites',
            compact('computers','similar','categories','subCategories','allCategories','cart_session'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart_session = session()->has('cart') ? session()->get('cart')->items : [];
        $allCategories = Category::all()->where('parent_id','=',Null);
        $categories = Category::with('category')->get();
        $subCategories = Category::with('subCategory')->get();
        $computers = Product::where('status',1)->paginate(20);
        $colors = ['#F03A4B', '#000000', '#2672FF', '#74AB2E', '#C31FEC', '#EABD1C'];
        $product = Product::find($id);
        return response()->view('home.productSinglePage',
            compact('product','colors','computers','categories','subCategories','allCategories','cart_session'));
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
        $cart_session = session()->has('cart') ? session()->get('cart')->items : [];
        $cart_products = Product::where('status',1)->whereIn('id', array_keys($cart_session))->get();
        $similar = Product::where('status',1)->paginate(4);
        $totalPrice = 0;
         foreach ($cart_products as $val){
             $price = $val->sale ? $val->sale:$val->price;
             $totalPrice += $price;
         }
        return response()->view('home/cart',compact('totalPrice','cart_session','cart_products','computers','similar','categories','subCategories','allCategories'));
    }

    public function shipping(Request $request)
    {
        if ($request->cart === '20') return view('home/shipping');
        if ($request->cart === '10' || $request->summary === null) return view('home/orderNow');
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
        $brands = ['image10.png', 'image15.png', 'image16.png', 'image17.png', 'image18.png', 'image19.png'];
        $figcaption = ['Earbuds', 'Headphones', 'Speakers', 'Keyboards', 'Mouses', 'Airpods'];
        $imgs = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png'];
        $cart_session = session()->has('cart') ? session()->get('cart')->items : [];
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
        return response()->view("home/$page",compact('computers','similar','categories','subCategories','productCategory',
            'imgs','figcaption','hot_sales','brands','prod','allCategories','cart_session'));
    }

    public function addToCart(Request $request)
    {
        $cart = $this->checkCart($request);
        if ($cart){
          $result =  $cart[0]->add($cart[1], $request->id);
          if ($result){
              Session::put('cart', $cart[0]);
              return $this->checkProducts('Computers','index',8);
          }
           return false;
        }
       return false;
    }



    public function deleteToCart(Request $request){
        $cart = $this->checkCart($request);
        if ($cart){
            $cart[0]->deleteItem($cart[1]);
            Session::put('cart', $cart[0]);
            return $this->cart();
        }
       return false;
    }

    public function checkCart($request){
        if (!empty($request->id)) {
            $product = Product::findorfail($request->id);
            $old_cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
            $cart = new Cart($old_cart);
            return [$cart,$product];
        }
        return false;
    }
}
