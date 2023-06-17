<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['units']= Unit::all();
        return view('backend.setup.unit.view_unit',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['units']= Unit::all();

        return view('backend.setup.unit.add_unit',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'unit_name' => 'required|unique:units,unit_name',
            'is_root'=>'required'
        ]);
        $data = new Unit();
        $data->unit_name = $request->unit_name;
        $data->is_root = $request->is_root;
        $data->conversion_rate = $request->conversion_rate;
        $data->conversion_unit_id = $request->conversion_unit_id;
        $data->save();
        $notification = array(
            'message' => 'Unit Inserted Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('unit.view')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['unit'] = Unit::find($id);
        $data['units']= Unit::all();
	    return view('backend.setup.unit.edit_unit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Unit::find($id);
        $validatedData = $request->validate([
            'unit_name' => 'required|unique:units,unit_name,'.$data->id,
            'is_root'=>'required'
        ]);
        $data->unit_name = $request->unit_name;
        $data->is_root = $request->is_root;
        $data->conversion_rate = $request->conversion_rate;
        $data->conversion_unit_id = $request->conversion_unit_id;
        $data->save();
        $notification = array(
            'message' => 'Unit Inserted Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('unit.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        $notification = array(
            'message' => 'Unit Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('unit.view')->with($notification);

    }

}
