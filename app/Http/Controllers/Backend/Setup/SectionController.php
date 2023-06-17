<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemSubCategory;
use App\Models\ItemCategory;
use App\Models\Department;
use App\Models\Section;

class SectionController extends Controller
{
    public function ViewSection(){
    	$data['allData'] = DB::table('sections')
                           ->leftJoin('departments','sections.department_id','=','departments.id')
                           ->select('sections.*','departments.dep_name')
                           ->get();
    	return view('backend.setup.section.view_section',$data);

    }

    public function SectionAdd(){

        $data['department'] = Department::all();
    	return view('backend.setup.section.add_section',$data);
    }


    public function SectionStore(Request $request){
	    	$validatedData = $request->validate([
	    		'sec_name' => 'required|unique:sections,sec_name',
				'department_id' => 'required',

	    	]);

	    	$data = new Section();
	    	$data->sec_name = $request->sec_name;
			$data->department_id = $request->department_id;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Section Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('section.view')->with($notification);

	    }



	 public function SectionEdit($id){
            $data['section'] = Section::find($id);
            $data['department'] = Department::all();
	    	return view('backend.setup.section.edit_section',$data);

	    }



	 public function SectionUpdate(Request $request,$id){

	 $data = Section::find($id);
     $validatedData = $request->validate([
        'sec_name' => 'required|unique:sections,sec_name',
        'department_id' => 'required',

    ]);
    	$data->sec_name = $request->sec_name;
    	$data->department_id = $request->department_id;
    	$data->save();

    	$notification = array(
    		'message' => 'Section Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('section.view')->with($notification);
    }


 public function SectionDelete($id){
	    	$user = Section::find($id);
	    	$user->delete();
	    	$notification = array(
	    		'message' => 'Section Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('section.view')->with($notification);

	    }



}
