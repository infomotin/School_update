<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Models\EduInsDtls;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\InstitutionInfo;

class EduInsDtlsController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // EmployeeEducationView
    public function EmployeeEducationView(){
        $data['allData'] = User::where('usertype', 'Employee')->get();
        return view('backend.employee.employee_reg.employee_education_view',$data);
    }
    // EmployeeEducationAdd
    public function EmployeeEducationAdd($id){
        $emp_data = User::find($id);
        $ins_data = InstitutionInfo::all();
        return view('backend.employee.employee_reg.employee_education_add',compact('emp_data','ins_data'));
    }
//EmployeeEducationStore
    public function EmployeeEducationStore(Request $request){
        // DD($request->all());
        $countDegree = count($request->degree_name);
        if($countDegree != NULL){
            for($i=0; $i<$countDegree; $i++){
                $data = new EduInsDtls();
                $data->employee_id = $request->employee_id;
                $data->edu_ins_id = $request->edu_ins_id[$i];
                $data->degree_name = $request->degree_name[$i];
                $data->board = $request->board[$i];
                $data->passing_year = $request->passing_year[$i];
                $data->result = $request->result[$i];
                $data->duration = $request->duration[$i];
                $data->achievement = $request->achievement[$i];
                $data->cgpa = $request->cgpa[$i];
                $data->group = $request->group[$i];
                $data->save();
            }
        }
        $notification = array(
            'message' => 'Employee Education Data Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('employee.education.view')->with($notification);
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
     * @param  \App\Models\EduInsDtls  $eduInsDtls
     * @return \Illuminate\Http\Response
     */
    public function show(EduInsDtls $eduInsDtls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EduInsDtls  $eduInsDtls
     * @return \Illuminate\Http\Response
     */
    public function edit(EduInsDtls $eduInsDtls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EduInsDtls  $eduInsDtls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EduInsDtls $eduInsDtls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EduInsDtls  $eduInsDtls
     * @return \Illuminate\Http\Response
     */
    public function destroy(EduInsDtls $eduInsDtls)
    {
        //
    }
}
