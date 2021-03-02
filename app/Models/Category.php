<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'parent_id','id');
    }

    public function subCategory(){
        return $this->hasMany(Category::class, 'parent_id','id');
    }

//    public function products(){
//        return $this->belongsToMany(Product::class);
//    }
    public function prods(){
        return $this->hasMAnyThrough(Product::class,Category::class,'parent_id','category_id','id','id');
    }


}
