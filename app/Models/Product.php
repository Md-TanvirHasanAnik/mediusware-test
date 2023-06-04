<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];
    public function productVariant()
    {
        return $this->hasMany(ProductVariant::class, 'product_id','id');
    }
    public function productVariantPrice()
    {
        return $this->hasMany(ProductVariantPrice::class);
    }

    public function scopeSearchProduct($query, $request)
    {
        return $query->when($request->title, function($q) use($request) {
             $q->where('title','like', '%'.$request->title.'%');
        })
        ->when($request->date, function($q) use($request) {
             $q->whereDate('created_at',$request->date);
        });
    }



}
