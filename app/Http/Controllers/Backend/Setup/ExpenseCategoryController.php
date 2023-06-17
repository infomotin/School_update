<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    public function ViewExpenseCat(){
    	$data['allData'] = ExpenseCategory::all();
		$data['type'] = ['pu'=>'Purchase','bi'=>'Bill','sa'=>'Salary'];

    	return view('backend.setup.expense_category.view_expense_cat',$data);
 
    }


    public function ExpenseCatAdd(){
    	return view('backend.setup.expense_category.add_expense_cat');
    }


public function ExpenseCatStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:expense_categories,name',
				'type' => 'required',
	    		
	    	]);

	    	$data = new ExpenseCategory();
	    	$data->name = $request->name;
			$data->type = $request->type;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Expense Category Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('expense.category.view')->with($notification);

	    }



	 public function ExpenseCatEdit($id){
	    	$editData = ExpenseCategory::find($id);
	    	return view('backend.setup.expense_category.edit_expense_cat',compact('editData'));

	    }



	 public function ExpenseCategoryUpdate(Request $request,$id){

	 $data = ExpenseCategory::find($id);
     $validatedData = $request->validate([
    		'name' => 'required|unique:expense_categories,name,'.$data->id
    	]);

    	
    	$data->name = $request->name;
    	$data->type = $request->type;
    	$data->save();

    	$notification = array(
    		'message' => 'Expense Category Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('expense.category.view')->with($notification);
    }


 public function ExpenseCategoryDelete($id){
	    	$user = ExpenseCategory::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Expense Category Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('expense.category.view')->with($notification);

	    }



}
