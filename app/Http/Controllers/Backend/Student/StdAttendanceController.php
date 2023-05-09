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
        ->select('std_attendances.att_date','std_attendances.att_status', 'std_attendances.login_time', 'std_attendances.logout_time', 'users.*','users.id_no','student_classes.name as class','student_years.name as year','student_shifts.name as shift','student_groups.name as group')
        
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
        // create db reletion between users table and assign_students whre user.id = assign_students.student_id and assign_students.class_id = class.id and assign_students.group_id = group.id and assign_students.shift_id = shift.id
        $data['students'] = DB::table('users')
        ->join('assign_students','users.id','=','assign_students.student_id')
        ->join('student_classes','assign_students.class_id','=','student_classes.id')
        ->join('student_years','assign_students.year_id', '=', 'student_years.id')
        ->join('student_shifts','assign_students.shift_id', '=', 'student_shifts.id')
        ->join('student_groups','assign_students.group_id', '=', 'student_groups.id')
        ->select('users.fname','users.id_no','student_classes.name as class','student_years.name as year','student_shifts.name as shift','student_groups.name as group','assign_students.roll')
        ->get();
        // return $data;
        // $data['students'] = json_encode($data['students'], true );

        // $data['students'] = User::where('usertype', 'Student')->get();
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();

        return view('backend.student.std_attendance.std_attendance_add', $data);
    }
    //StudentYeraClassShiftGroupWise
    public function StudentYeraClassShiftGroupWise(Request $request){
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $shift_id = $request->shift_id;
        $group_id = $request->group_id;
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();
        $data['students'] = DB::table('users')
        ->join('assign_students', 'users.id', '=', 'assign_students.student_id')
        ->join('student_classes', 'assign_students.class_id', '=', 'student_classes.id')
        ->join('student_years', 'assign_students.year_id', '=', 'student_years.id')
        ->join('student_shifts', 'assign_students.shift_id', '=', 'student_shifts.id')
        ->join('student_groups', 'assign_students.group_id', '=', 'student_groups.id')
        ->select('users.fname', 'users.id_no', 'student_classes.name as class', 'student_years.name as year', 'student_shifts.name as shift', 'student_groups.name as group', 'assign_students.roll')
        ->where('assign_students.year_id', $year_id)
        ->where('assign_students.class_id', $class_id)
        ->where('assign_students.shift_id', $shift_id)
        ->where('assign_students.group_id', $group_id)
        ->get();

        // $data['allData'] = AssignStudent::with(['student'])->where('year_id', $year_id)->where('class_id', $class_id)->where('shift_id', $shift_id)->where('group_id', $group_id)->get();
        // return $data;
        return view('backend.student.std_attendance.std_attendance_add', $data);
    }

    // StdAttendanceStore
    public function StdAttendanceStore(Request $request){
        DD($request->all());
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
