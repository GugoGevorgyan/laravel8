<?php


namespace App;

use App\Models\Product;
use phpDocumentor\Reflection\Types\This;

class Cart
{
    public  $items = null;
    private $total_price = 0;
    public $total_qty = 0;

    public function __construct($old_cart)
    {
        if(!empty($old_cart)){
            $this->items = $old_cart->items;
            $this->total_price = $old_cart->total_price;
            $this->total_qty = $old_cart->total_qty;
        }


    }


    public function add($item,$id){

        if(array_key_exists($id, $this->items)){
            return false;
        }
        $price = $item->price;
        if ($item->sale) $price = $item->sale;
        $store_item = [
            'price'=> $price,
            'product' => $item,
        ];
        if(!empty($this->items)){
            if(!array_key_exists($id, $this->items)){
                $this->items[$id] = $store_item;
            }
        }else{
            $this->items[$id] = $store_item;
        }
        $price = $item->price;
        if ($item->sale) $price = $item->sale;
        $this->items[$id]['price'] = $price;
        $total_price = 0;
        foreach ($this->items as $product){
            $total_price += $product['price'];
        }
        $this->total_price = $total_price;
        $this->total_qty = count($this->items);
        return true;
    }

    public function getTotalPrice(){
        return $this->total_price;
    }
    public function deleteItem($item){
        $price = $item->sale ? $item->sale : $item->price;
//        dd($price);
//        $this->total_price -= $price ;
        unset( $this->items[$item->id]);


    }
}
