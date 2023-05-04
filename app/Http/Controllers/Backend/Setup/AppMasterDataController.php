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
