<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemSubCategory;
use App\Models\ItemCategory;

class ItemSubCategoryController extends Controller
{
    public function ViewItemSubCategory(){
    	$data['allData'] = DB::table('item_sub_categories')
                           ->leftJoin('item_categories','item_sub_categories.category_id','=','item_categories.id')
                           ->select('item_sub_categories.*','item_categories.cat_name')
                           ->get();
    	return view('backend.setup.item_sub_category.view_item_Sub_cat',$data);
 
    }

    public function ItemSubCategoryAdd(){

        $data['category'] = ItemCategory::all();


    	return view('backend.setup.item_sub_category.add_item_sub_cat',$data);
    }


    public function ItemSubCategoryStore(Request $request){

	    	$validatedData = $request->validate([
	    		'sub_cat_name' => 'required|unique:item_sub_categories,sub_cat_name',
				'category_id' => 'required',
	    		
	    	]);

	    	$data = new ItemSubCategory();
	    	$data->sub_cat_name = $request->sub_cat_name;
			$data->category_id = $request->category_id;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Item Sub Category Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('item.subcategory.view')->with($notification);

	    }



	 public function ItemSubCategoryEdit($id){
            $data['sub_category'] = ItemSubCategory::find($id);
            $data['category'] = ItemCategory::all();
	    	return view('backend.setup.item_sub_category.edit_item_sub_cat',$data);

	    }



	 public function ItemSubCategoryUpdate(Request $request,$id){

	 $data = ItemSubCategory::find($id);
     $validatedData = $request->validate([
        'sub_cat_name' => 'required|unique:item_sub_categories,sub_cat_name',
        'category_id' => 'required',
        
    ]);
    	$data->sub_cat_name = $request->sub_cat_name;
    	$data->category_id = $request->category_id;
    	$data->save();

    	$notification = array(
    		'message' => 'Item Sub Category Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('item.subcategory.view')->with($notification);
    }


 public function ItemSubCategoryDelete($id){
	    	$user = ItemSubCategory::find($id);
	    	$user->delete();
	    	$notification = array(
	    		'message' => 'Item Sub Category Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('item.subcategory.view')->with($notification);

	    }



}
