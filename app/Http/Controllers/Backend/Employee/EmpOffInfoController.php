<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Models\EmpOffInfo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstitutionInfo;
use App\Models\Department;
use App\Models\Section;


class EmpOffInfoController extends Controller
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
    public function EmployeeOfficeAdd($id){
        $department =Department::all();
        $section =Section::all();
        $emp_data = User::find($id);
        $ins_data = InstitutionInfo::all();
        return view('backend.employee.employee_reg.employee_offinfo_add', compact('emp_data', 'ins_data','department','section'));
    }

    //EmployeeOfficeStore
    public function EmployeeOfficeStore(Request $request){
        dd($request->all());
        // data validation start
        // $validatedData = $request->validate([
        //     'employee_id' => 'required',
        //     'per_address' => 'required',
        //     'nid' => 'required',
        //     'tin' => 'required',
        //     'emp_father_contract' => 'required',
        //     'emp_mother_contract' => 'required',
        //     'emp_father_address' => 'required',
        //     'emp_mother_address' => 'required',
        //     'emp_spouse_contract' => 'required',
        //     'emp_spouse_address' => 'required',
        //     'bank_acc_no' => 'required',
        //     'bank_name' => 'required',
        //     'bank_branch' => 'required',
        //     'bank_routing_no' => 'required',
        //     'blood' => 'required',
        //     'pre_office_name' => 'required',
        //     'pre_office_address' => 'required',


        // ]);
        // data validation end
        // make instanceof(EmpOffInfo::class);
        $data = new EmpOffInfo();
        $data->employee_id = $request->employee_id;
        $data->per_address = $request->per_address;
        $data->nid = $request->nid;
        $data->tin = $request->tin;
        $data->emp_father_contract = $request->emp_father_contract;
        $data->emp_mother_contract = $request->emp_mother_contract;
        $data->emp_father_address = $request->emp_father_address;
        $data->emp_mother_address = $request->emp_mother_address;
        $data->emp_spouse_contract = $request->emp_spouse_contract;
        $data->emp_spouse_address = $request->emp_spouse_address;
        $data->bank_acc_no = $request->bank_acc_no;
        $data->bank_name = $request->bank_name;
        $data->bank_branch = $request->bank_branch;
        $data->department_id = $request->department_id;
        $data->section_id = $request->section_id;
        $data->bank_routing_no = $request->bank_routing_no;
        $data->blood = $request->blood;
        $data->pre_office_name = $request->pre_office_name;
        $data->pre_office_address = $request->pre_office_address;

        // dd($data);
        $data->save();


        $notification = array(
            'message' => 'Employee Office Data Updated Successfully',
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
     * @param  \App\Models\EmpOffInfo  $empOffInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EmpOffInfo $empOffInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpOffInfo  $empOffInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpOffInfo $empOffInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpOffInfo  $empOffInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpOffInfo $empOffInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpOffInfo  $empOffInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpOffInfo $empOffInfo)
    {
        //
    }
}
