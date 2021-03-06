<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','product_id','quantity'];
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
