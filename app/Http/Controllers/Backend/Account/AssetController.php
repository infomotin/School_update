<?php

namespace App\Http\Controllers\Backend\Account;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;

use DB;
use PDF;


use App\Models\Assets;

class AssetController extends Controller
{
    public function ViewAsset(){

    	$data['allData'] = Assets::all();
    	return view('backend.account.assets.asset_view',$data);

    }


    public function AssetAdd(){

      return view('backend.account.assets.asset_add');
    }
 

    public function AssetStore(Request $request){
		
		$validator = Validator::make($request->all(),[
			'name' => 'required|unique:fee_categories,name',
			'type' => 'required',
			'quantity' => 'required|numeric',
			'price' => 'required|numeric',
			'pur_date' => 'required|date',
			'duration' => 'required|numeric',
			'dep_percent' => 'required|numeric',
		]);

		if ($validator->fails()) {
            return redirect()->route('expense.assets.add')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$asset = new Assets();
    	$asset->name = $request->name;
    	$asset->quantity = $request->quantity;
    	$asset->price = $request->price;
    	$asset->amount = $request->amount;
    	$asset->type = $request->type;
    	$asset->pur_date = date('Y-m-d', strtotime($request->pur_date));
    	$asset->duration = $request->amount;
    	$asset->dep_percent = $request->amount;
		$asset->save();

    	$notification = array(
    		'message' => 'Asset Inserted Successfully',
    		'alert-type' => 'success'
    	);
    	

    	return redirect()->route('expense.assets.view')->with($notification);
    	

    } // end method 


    public function AssetEdit($id){
        $data['editData'] = Assets::find($id);
    	return view('backend.account.assets.asset_edit', $data);
    }


	public function AssetUpdate(Request $request, $id){
		
		$validator = Validator::make($request->all(),[
			'name' => 'required|unique:fee_categories,name',
			'type' => 'required',
			'quantity' => 'required|numeric',
			'price' => 'required|numeric',
			'pur_date' => 'required|date',
			'duration' => 'required|numeric',
			'dep_percent' => 'required|numeric',
		]);

		if ($validator->fails()) {
            return redirect()->route('expense.assets.add')
                        ->withErrors($validator)
                        ->withInput();
        }
		
    	$asset = Assets::find($id);
    	$asset->name = $request->name;
    	$asset->quantity = $request->quantity;
    	$asset->price = $request->price;
    	$asset->amount = $request->amount;
    	$asset->type = $request->type;
    	$asset->pur_date = date('Y-m-d', strtotime($request->pur_date));
    	$asset->duration = $request->amount;
    	$asset->dep_percent = $request->dep_percent;
		$asset->save();

    	$notification = array(
    		'message' => 'Asset Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('expense.assets.view')->with($notification);

    } // end method 






}
 