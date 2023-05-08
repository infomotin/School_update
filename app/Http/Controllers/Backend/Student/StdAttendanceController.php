<?php

namespace App\Http\Controllers\Backend\Student;

use App\Models\StdAttendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use PDF;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\AssignStudent;


class StdAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // StdAttendanceView
    public function StdAttendanceView(){
        // Create relation between users and assign_students  and std_attendances table and student_classes, student_years, student_shifts, student_groups tables wher user Table and std_attendances relation is user id = id_no and user table and assign_students relation is user id = student_id and assign_students table and std_attendances relation is student_id = id_no and student_classes table and assign_students relation is student_class_id = id and student_years table and assign_students relation is student_year_id = id and student_shifts table and assign_students relation is student_shift_id = id and student_groups table and assign_students relation is student_group_id = id
        //create relation user table and std_attendances using joining 
        

        $data['allData'] = DB::table('std_attendances')
        ->join('users', 'std_attendances.id_no','=','users.id')
        ->join('assign_students','std_attendances.id_no','=','assign_students.student_id')
        ->join('student_classes','assign_students.class_id','=','student_classes.id')
        ->join('student_years','assign_students.year_id', '=', 'student_years.id')
        ->join('student_shifts','assign_students.shift_id', '=', 'student_shifts.id')
        ->join('student_groups','assign_students.group_id', '=', 'student_groups.id')
        ->select('std_attendances.att_date','std_attendances.att_status', 'std_attendances.login_time', 'std_attendances.logout_time', 'users.fname','users.id_no','student_classes.name as class','student_years.name as year','student_shifts.name as shift','student_groups.name as group')
        
        ->get();
        // if($data['allData']->count() != 0){
        //     $data['allData'] = json_encode($data['allData']);

        // }else{
        //     return json_encode('No Data Found');
        // }
        // $data['allData'] = AssignStudent::all();


        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();

        return view('backend.student.std_attendance.std_attendance_view', $data);
    }
//StdAttendanceAdd
    public function StdAttendanceAdd(){
        $data['students'] = User::where('usertype', 'Student')->get();
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();

        return view('backend.student.std_attendance.std_attendance_add', $data);
    }
    // StdAttendanceStore
    public function StdAttendanceStore(Request $request){
        $date = date('Y-m-d', strtotime($request->date));
        StdAttendance::where('att_date', $date)->delete();
        $countClass = count($request->class_id);
        for($i=0; $i<$countClass; $i++){
            $std = new StdAttendance();
            $std->class_id = $request->class_id[$i];
            $std->year_id = $request->year_id[$i];
            $std->shift_id = $request->shift_id[$i];
            $std->group_id = $request->group_id[$i];
            $std->att_date = $date;
            $std->att_status = $request->att_status[$i];
            $std->login_time = $request->login_time[$i];
            $std->logout_time = $request->logout_time[$i];
            $std->save();
        }
        return redirect()->route('students.attendance.view')->with('success', 'Data Inserted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StdAttendance  $stdAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(StdAttendance $stdAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StdAttendance  $stdAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(StdAttendance $stdAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StdAttendance  $stdAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StdAttendance $stdAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StdAttendance  $stdAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(StdAttendance $stdAttendance)
    {
        //
    }
}
