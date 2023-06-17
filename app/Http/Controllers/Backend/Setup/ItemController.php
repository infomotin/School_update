<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemSubCategory;
use App\Models\ItemCategory;
use App\Models\Item;

class ItemController extends Controller
{
    public function ViewItem(){
    	$data['allData'] = DB::table('items')
                           ->leftJoin('item_sub_categories','items.sub_category_id','=','item_sub_categories.id')
                           ->select('items.*','item_sub_categories.sub_cat_name')
                           ->get();
		// $data['allData'] = Item::all();
    	return view('backend.setup.item.view_item',$data);
 
    }


    public function ItemAdd(){

		$data['sub_category'] = ItemSubCategory::all();

    	return view('backend.setup.item.add_item',$data);
    }


    public function ItemStore(Request $request){

	    	$validatedData = $request->validate([
	    		'item_name' => 'required|unique:items,item_name',
				'sub_category_id' => 'required',
	    		
	    	]);

	    	$data = new Item();
	    	$data->item_name = $request->item_name;
			$data->sub_category_id = $request->sub_category_id;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Item Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('item.view')->with($notification);

	    }



	 public function ItemSubCategoryEdit($id){
            $data['sub_category'] = ItemSubCategory::find($id);
            $data['category'] = ItemCategory::all();
	    	return view('backend.setup.item_sub_category.edit_item_sub_cat',$data);

	    }



// 	 public function ItemSubCategoryUpdate(Request $request,$id){

// 	 $data = ItemSubCategory::find($id);
//      $validatedData = $request->validate([
//         'sub_cat_name' => 'required|unique:item_sub_categories,sub_cat_name',
//         'category_id' => 'required',
        
//     ]);
//     	$data->sub_cat_name = $request->sub_cat_name;
//     	$data->category_id = $request->category_id;
//     	$data->save();

//     	$notification = array(
//     		'message' => 'Item Sub Category Updated Successfully',
//     		'alert-type' => 'success'
//     	);

//     	return redirect()->route('item.subcategory.view')->with($notification);
//     }


 public function ItemDelete($id){
	    	$user = Item::find($id);
	    	$user->delete();
	    	$notification = array(
	    		'message' => 'Item Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('item.view')->with($notification);

	    }



}
