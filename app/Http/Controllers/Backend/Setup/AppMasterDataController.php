<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\AppMasterData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AppMasterDataController extends Controller
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
    public function ViewAppMasterData(){
        $data['allData'] = AppMasterData::all();
        return view('backend.setup.master_data.view_app_master_data',$data);
 
    }

    public function MasterDataAdd(){
        return view('backend.setup.master_data.add_master_data');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function MasterDataStore(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|unique:app_master_data,name',
            
        ]);

        $data = new AppMasterData();
        $data->name = $request->name;
        $data->code = $request->code;
        $data->status = $request->status;
        $data->address_line_1 = $request->address_line_1;
        $data->address_line_2 = $request->address_line_2;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->logo = $request->logo;
        $data->favicon = $request->favicon;
        $data->footer_logo = $request->footer_logo;
        $data->footer_text = $request->footer_text;
        $data->footer_address = $request->footer_address;
        $data->footer_contact_no = $request->footer_contact_no;
        $data->footer_email = $request->footer_email;
        $data->date_of_Stub = $request->date_of_Stub;
        $data->footer_whatsapp = $request->footer_whatsapp;
        $data->footer_snapchat = $request->footer_snapchat;
        $data->moto = $request->moto;
        $data->mission = $request->mission;
        $data->vision = $request->vision;
        $data->save();
        


        $notification = array(
            'message' => 'Master Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('masterdata.view')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppMasterData  $appMasterData
     * @return \Illuminate\Http\Response
     */
    public function show(AppMasterData $appMasterData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppMasterData  $appMasterData
     * @return \Illuminate\Http\Response
     */
    public function edit(AppMasterData $appMasterData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppMasterData  $appMasterData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppMasterData $appMasterData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppMasterData  $appMasterData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppMasterData $appMasterData)
    {
        //
    }
}
