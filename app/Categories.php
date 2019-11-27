<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model
{
    public static function store(){

    	$addcategory = new self;
    	$addcategory->name = $request->name;
    	$addcategory->supplier_id = $request->name;


    }
}
