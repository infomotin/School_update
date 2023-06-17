<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['currencies']= Currency::all();
        return view('backend.setup.currency.view_currency',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['currencies']= Currency::all();

        return view('backend.setup.currency.add_currency',$data);

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
            'currency_name' => 'required|unique:currencies,currency_name',
            'is_root'=>'required'
        ]);
        $data = new Currency();
        $data->currency_name = $request->currency_name;
        $data->is_root = $request->is_root;
        $data->conversion_rate = $request->conversion_rate;
        $data->conversion_currency_id = $request->conversion_currency_id;
        $data->save();
        $notification = array(
            'message' => 'Currency Inserted Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('currency.view')->with($notification);

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
        $data['currency'] = Currency::find($id);
        $data['currencies']= Currency::all();
	    return view('backend.setup.currency.edit_currency',$data);
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
        $data = Currency::find($id);
        $validatedData = $request->validate([
            'currency_name' => 'required|unique:currencies,currency_name,'.$data->id,
            'is_root'=>'required'
        ]);
        $data->currency_name = $request->currency_name;
        $data->is_root = $request->is_root;
        $data->conversion_rate = $request->conversion_rate;
        $data->conversion_currency_id = $request->conversion_currency_id;
        $data->save();
        $notification = array(
            'message' => 'Currency Inserted Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('currency.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Currency::find($id);
        $unit->delete();

        $notification = array(
            'message' => 'Currency Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('currency.view')->with($notification);

    }

}
