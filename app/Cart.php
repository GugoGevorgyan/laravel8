<?php


namespace App;


class Cart
{
    public  $items = null;
    private $total_price = 0;

    public function __construct($old_cart)
    {
        if(!empty($old_cart)){
            $this->items = $old_cart->items;
            $this->total_price = $old_cart->total_price;
        }


    }

    public function add($item,$id){
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
//            dd($product['price']);
            $total_price += $product['price'];
        }
        $this->total_price = $total_price;
//        $this->items = null;
//
    }

    public function getTotalPrice(){
        return $this->total_price;
    }
}
