<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory; 
use App\Models\Department; 

class DepartmentController extends Controller
{
    public function ViewDepartment(){
    	$data['allData'] = Department::all();
    	return view('backend.setup.department.view_department',$data);
 
    }


    public function DepartmentAdd(){
    	return view('backend.setup.department.add_department');
    }


public function DepartmentStore(Request $request){

	    	$validatedData = $request->validate([
	    		'dep_name' => 'required|unique:departments,dep_name',
	    		
	    	]);

	    	$data = new Department();
	    	$data->dep_name = $request->dep_name;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Department Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('department.view')->with($notification);

	    }



	 public function DepartmentEdit($id){
	    	$editData = Department::find($id);
	    	return view('backend.setup.department.edit_department',compact('editData'));

	    }



	 public function DepartmentUpdate(Request $request,$id){

	 $data = Department::find($id);
     
     $validatedData = $request->validate([
    		'dep_name' => 'required|unique:departments,dep_name,'.$data->id
    		
    	]);

    	
    	$data->dep_name = $request->dep_name;
    	$data->save();

    	$notification = array(
    		'message' => 'Department Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('department.view')->with($notification);
    }


 public function DepartmentDelete($id){
	    	$user = Department::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Department Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('department.view')->with($notification);

	    }



}
