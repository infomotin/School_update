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
        $data['std_data'] = User::where('usertype', 'Student')->get();
        $data['std_att'] = StdAttendance::all();
        //make relation with users Table and StdAttendance table where id_no = id_no 
        $data['all_att_Data'] = DB::table('users')
            ->join('std_attendances', 'users.id_no', '=', 'std_attendances.id_no')
            ->select('users.*', 'std_attendances.*')
            ->get();



        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();

        return view('backend.student.std_attendance.std_attendance_view', $data);
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
