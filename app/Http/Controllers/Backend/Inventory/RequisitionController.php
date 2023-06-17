<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AccountOtherCost;
use App\Models\RequisitionHead;
use App\Models\RequisitionDetails;
use App\Models\Item;
use App\Models\Unit;
use App\Models\Currency;
use App\Models\User;


class RequisitionController extends Controller
{
    public function index(){
    	$data['requisition'] = RequisitionHead::orderBy('id','desc')->get();

    	return view('backend.inventory.requisition.requisition_view', $data);
    }

    public function create(){
        $items = Item::all();
        $unit = Unit::all();
        $currency = Currency::all();
        $user = User::where('usertype','employee')->get();
    	return view('backend.inventory.requisition.requisition_add',compact('items','unit','currency','user'));
    }


    public function store(Request $request){

        $checkYear = requisitionYear::find($request->year_id)->name;
    	$requisition = User::where('usertype','requisition')->orderBy('id','DESC')->first();

    	if ($requisition == null) {
    		$firstReg = 0;
    		$requisitionId = $firstReg+1;
    		if ($requisitionId < 10) {
    			$id_no = '000'.$requisitionId;
    		}elseif ($requisitionId < 100) {
    			$id_no = '00'.$requisitionId;
    		}elseif ($requisitionId < 1000) {
    			$id_no = '0'.$requisitionId;
    		}
    	}else{
     $requisition = User::where('usertype','requisition')->orderBy('id','DESC')->first()->id;
     	$requisitionId = $requisition+1;
     	if ($requisitionId < 10) {
    			$id_no = '000'.$requisitionId;
    		}elseif ($requisitionId < 100) {
    			$id_no = '00'.$requisitionId;
    		}elseif ($requisitionId < 1000) {
    			$id_no = '0'.$requisitionId;
    		}

    	} // end else

    	$final_id_no = $checkYear.$id_no;
    	$notification = array(
    		'message' => 'Other Cost Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('other.cost.view')->with($notification);

    }  // end method


    public function OtherCostEdit($id){
        $data['editData'] = AccountOtherCost::find($id);
    	return view('backend.account.other_cost.other_cost_edit', $data);
    }



    public function OtherCostUpdate(Request $request, $id){

    	$cost = AccountOtherCost::find($id);
    	$cost->date = date('Y-m-d', strtotime($request->date));
    	$cost->amount = $request->amount;

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/cost_images/'.$cost->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/cost_images'),$filename);
    		$cost['image'] = $filename;
    	}
    	$cost->description = $request->description;
    	$cost->save();

    	$notification = array(
    		'message' => 'Other Cost Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('other.cost.view')->with($notification);

    } // end method



}
