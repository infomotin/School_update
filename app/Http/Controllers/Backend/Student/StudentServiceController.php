<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\ServiceDiscount;
use App\Models\Service; 
use DB;
use PDF;



class StudentServiceController extends Controller
{
    public function StudentServView($id){
        $data['student'] = AssignStudent::with(['student'])->where('student_id',$id)->first();
        $data['services'] = Service::all();
    	return view('backend.student.student_reg.student_service_add',$data);

    }

    public function StudentServStore(Request $request){
        $date = date('Y-m-d');


        foreach($request->service_id as $key => $item){

            $service_discount = new ServiceDiscount();
            $service_discount->date = $date;
            $service_discount->assign_student_id = $item;
            $service_discount->service_id = $request->service_id[$key];
            $service_discount->amount = $request->amount[$key];
            $service_discount->discount = $request->discount[$key];
            $service_discount->save();
        }
    	$notification = array(
    		'message' => 'Student Service Added Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.registration.view')->with($notification);

    } // End Method 






} 
