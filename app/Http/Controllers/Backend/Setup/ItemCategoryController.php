<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemCategory;

class ItemCategoryController extends Controller
{
    public function ViewItemCategory(){
    	$data['allData'] = ItemCategory::all();

    	return view('backend.setup.item_category.view_item_cat',$data);
 
    }


    public function ItemCategoryAdd(){
    	return view('backend.setup.item_category.add_item_cat');
    }


public function ItemCategoryStore(Request $request){

	    	$validatedData = $request->validate([
	    		'cat_name' => 'required|unique:item_categories,cat_name',
	    		
	    	]);

	    	$data = new ItemCategory();
	    	$data->cat_name = $request->cat_name;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Item Category Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('item.category.view')->with($notification);

	    }



	 public function ItemCategoryEdit($id){
	    	$editData = ItemCategory::find($id);
	    	return view('backend.setup.item_category.edit_item_cat',compact('editData'));

	    }



	 public function ItemCategoryUpdate(Request $request,$id){

	 $data = ItemCategory::find($id);
     $validatedData = $request->validate([
    		'cat_name' => 'required|unique:item_categories,cat_name,'.$data->id
    	]);
    	$data->cat_name = $request->cat_name;
    	$data->save();
    	$notification = array(
    		'message' => 'Item Category Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('item.category.view')->with($notification);
    }


 public function ItemCategoryDelete($id){
	    	$user = ItemCategory::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Item Category Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('item.category.view')->with($notification);

	    }



}
