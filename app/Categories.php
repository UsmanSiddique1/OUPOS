<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model
{

	protected $fillable = [

		'name',
		'supplier_id'

	];
    public static function store(Request $request){

    	$addcategory = new self;
    	$addcategory->name = $request->name;
    	$addcategory->supplier_id = $request->name;

    }

    public static function update(Request $request, $id){

    	if ($id) {
    		
    		$update = self::where('id', $id)->first();
    		$update->name = $request->name;
    		$update->supplier_id = $request->supplier_id;
    		$update->save();

    		return redirect('Admin.Pages.Categories.showcategories')->with('success', 'Your Category has been updated successfully'); 
    	}

    	else return redirect('error');

    }

    
}
