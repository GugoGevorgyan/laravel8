<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hot_sales = Product::paginate(4);
        $computers = Product::paginate(8);
//        $computers = Product::paginate(5);

        $brands = ['image10.png', 'image15.png', 'image16.png', 'image17.png', 'image18.png', 'image19.png'];
        $figcaption = ['Earbuds', 'Headphones', 'Speakers', 'Keyboards', 'Mouses', 'Airpods'];
        $imgs = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png'];
        return response()->view('home/index', ['imgs' => $imgs, 'figcaption' => $figcaption,
            'hot_sales' => $hot_sales, 'computers' => $computers, 'brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computers = Product::paginate(20);
        $similar = Product::paginate(4);
        return response()->view('home/product', ['computers' => $computers, 'similar' => $similar]);
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
        $computers = Product::paginate(2);
        $similar = Product::paginate(4);
        return response()->view('home/favorites', ['computers' => $computers, 'similar' => $similar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computers = Product::paginate(4);
        $colors = ['#F03A4B', '#000000', '#2672FF', '#74AB2E', '#C31FEC', '#EABD1C'];
        $product = Product::find($id);
        return response()->view('home.productSinglePage',
            ['product' => $product, 'colors' => $colors, 'computers' => $computers]);
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
        $computers = Product::paginate(2);
        $similar = Product::paginate(4);
        return response()->view('home/cart', ['computers' => $computers, 'similar' => $similar]);
    }

    public function shipping()
    {
        return view('home/shipping');
    }

    public function orderNow()
    {
        return view('home/orderNow');
    }
}
