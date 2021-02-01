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
        $hot_sales = [
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => ''],
            (object) ['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                    'old_price' => 2500],
        ];
        $computers = [
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => ''],
            (object) ['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                    'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => ''],
            (object) ['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            (object)['name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                    'old_price' => 2500],
        ];
//        $computers = Product::paginate(5);

        $brands = ['image10.png','image15.png','image16.png','image17.png','image18.png','image19.png'];
        $figcaption = ['Earbuds', 'Headphones', 'Speakers', 'Keyboards', 'Mouses', 'Airpods'];
        $imgs = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png'];
        return response()->view('home/index', ['imgs' => $imgs, 'figcaption' => $figcaption ,
            'hot_sales'=>$hot_sales, 'computers'=>$computers, 'brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computers = Product::paginate(20);
        return response()->view('home/product', ['computers'=>$computers]);
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
        //
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
}
