<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\InstitutionInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstitutionInfoController extends Controller
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

    //InstituteView
    public function InstituteView(){
        $data['allData'] = InstitutionInfo::all();
        return view('backend.setup.institute.view_institute',$data);
 
    }
    //InstituteAdd
    public function InstituteAdd(){
        return view('backend.setup.institute.add_institute');
    }
    //InstituteStore
    public function InstituteStore(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|unique:institution_infos,name',
            
        ]);

        $data = new InstitutionInfo();
        $data->name = $request->name;
        $data->short_name = $request->short_name;
        $data->status = 1;
        $data->address = $request->address;
        $data->save();

        $notification = array(
            'message' => 'institution Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('institute.view')->with($notification);

    }
    //InstituteEdit
    public function InstituteEdit($id){
        $editData = InstitutionInfo::find($id);
        return view('backend.setup.institute.edit_institute',compact('editData'));
    }
    //InstituteUpdate
    public function InstituteUpdate(Request $request,$id)
    {
        // dd($request->all());
        $data = InstitutionInfo::find($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:institution_infos,name,'.$data->id,
            
        ]);
        $data->name = $request->name;
        $data->short_name = $request->short_name;
        $data->status = 1;
        $data->address = $request->address;
        $data->save();

        $notification = array(
            'message' => 'institution Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('institute.view')->with($notification);

    }
    //InstituteDelete
    public function InstituteDelete($id){
        $user = InstitutionInfo::find($id);
        $user->delete();
        $notification = array(
            'message' => 'institution Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('institute.view')->with($notification);
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
     * @param  \App\Models\InstitutionInfo  $institutionInfo
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionInfo $institutionInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionInfo  $institutionInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionInfo $institutionInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstitutionInfo  $institutionInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitutionInfo $institutionInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionInfo  $institutionInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionInfo $institutionInfo)
    {
        //
    }
}
