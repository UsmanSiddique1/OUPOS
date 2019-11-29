<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public static function store(Reqeust $request){

    	$addproduct = new self;
        $addproduct->name = $request->name;
        $addproduct->category_id = $request->category_id;
        $addproduct->product_price = $request->product_price;
        $addproduct->product_quantity = $request->product_quantity;
        
    }
}
