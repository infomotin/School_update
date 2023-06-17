<?php

namespace App\Http\Controllers\Backend\Employee;
use Illuminate\Support\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use DB;
use PDF;

use App\Models\Designation;
use App\Models\EmployeeSallaryLog;

use App\Models\EmployeeLeave;
use App\Models\LeavePurpose;

use App\Models\EmployeeAttendance;


class EmployeeAttendanceController extends Controller
{
    


    public function AttendanceView(){
        $data['allData'] = EmployeeAttendance::select('date')->groupBy('date')->orderBy('date','DESC')->get();
    	// $data['allData'] = EmployeeAttendance::orderBy('id','DESC')->get();
    	return view('backend.employee.employee_attendance.employee_attendance_view',$data);
    }


    public function AttendanceAdd(){
    	$data['employees'] = User::where('usertype','employee')->get();
    	return view('backend.employee.employee_attendance.employee_attendance_add',$data);

    }


    public function AttendanceStore(Request $request){

    	EmployeeAttendance::where('date', date('Y-m-d', strtotime($request->date)))->delete();


		$AllRequestData = $request->all();
		

		

    	$countemployee = count($request->employee_id);
    	for ($i=0; $i <$countemployee ; $i++) { 
    		$attend_status = 'attend_status'.$i;
    		$attend = new EmployeeAttendance();
    		$attend->date = date('Y-m-d',strtotime($request->date));
    		$attend->employee_id = $request->employee_id[$i];
    		$attend->attend_status = $request->$attend_status;
			$attend->login_time = $request->login_time[$request->employee_id[$i]];
			$attend->logout_time = $request->logout_time[$request->employee_id[$i]];
			$logintime = strtotime($request->login_time[$request->employee_id[$i]]);
			$startintime = strtotime("9:15");
			$diff = ($logintime - $startintime)/60;
			if($diff > 0){
				$attend->late_minute = $diff;
			}
			$logouttime = strtotime($request->logout_time[$request->employee_id[$i]]);
			$startouttime = strtotime("17:00");
			$diffs = ($startouttime - $logouttime)/60;
			if($diffs > 0){
				$attend->early_minute = $diffs;
			}

    		$attend->save();
    	} // end For Loop

 		$notification = array(
    		'message' => 'Employee Attendace Data Update Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.attendance.view')->with($notification);

    } // end Method



    public function AttendanceEdit($date){
    	$data['editData'] = EmployeeAttendance::where('date',$date)->get();
    	$data['employees'] = User::where('usertype','employee')->get();
    	return view('backend.employee.employee_attendance.employee_attendance_edit',$data);
    }


    public function AttendanceDetails($date){
    	$data['details'] = EmployeeAttendance::where('date',$date)->get();
    	return view('backend.employee.employee_attendance.employee_attendance_details',$data);

    }



}
 