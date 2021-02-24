<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'id','parent_id');
    }

    public function subCategorie(){
        return $this->hasOne(Categorie::class, 'parent_id','id');
    }
}
