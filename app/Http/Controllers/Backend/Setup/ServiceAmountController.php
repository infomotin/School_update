<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\StudentClass; 
use App\Models\ServiceAmount;

class ServiceAmountController extends Controller
{
    public function ViewServiceAmount(){
        // $data['allData'] = ServiceAmount::all();
        $data['allData'] = ServiceAmount::select('service_id')->groupBy('service_id')->get();
    	return view('backend.setup.service_amount.view_service_amount',$data);
    }


    public function AddServiceAmount(){
    	$data['services'] = Service::all();
    	$data['classes'] = StudentClass::all();
    	return view('backend.setup.service_amount.add_service_amount',$data);
    }


    public function StoreServiceAmount(Request $request){

    	$countClass = count($request->class_id);
    	if ($countClass !=NULL) {
    		for ($i=0; $i <$countClass ; $i++) { 
    			$service_amount = new ServiceAmount();
    			$service_amount->service_id = $request->service_id;
    			$service_amount->class_id = $request->class_id[$i];
    			$service_amount->amount = $request->amount[$i];
    			$service_amount->save();

    		} // End For Loop
    	}// End If Condition

    	$notification = array(
    		'message' => 'Service Amount Inserted Successfully',
    		'alert-type' => 'success'
    	);
    	return redirect()->route('service.amount.view')->with($notification);

    }  // End Method 



    public function EditServiceAmount($service_id){
    	$data['editData'] = ServiceAmount::where('service_id',$service_id)->orderBy('class_id','asc')->get();
    	// dd($data['editData']->toArray());
    	$data['services'] = Service::all();
    	$data['classes'] = StudentClass::all();
    	return view('backend.setup.service_amount.edit_service_amount',$data);

    }


    public function UpdateServiceAmount(Request $request,$service_id){
    	if ($request->class_id == NULL) {
       
        $notification = array(
    		'message' => 'Sorry You do not select any class amount',
    		'alert-type' => 'error'
    	);

    	return redirect()->route('service.amount.edit',$service_id)->with($notification);
    		 
    	}else{
		$countClass = count($request->class_id);
		ServiceAmount::where('service_id',$service_id)->delete(); 
				for ($i=0; $i <$countClass ; $i++) { 
					$service_amount = new ServiceAmount();
					$service_amount->service_id = $request->service_id;
					$service_amount->class_id = $request->class_id[$i];
					$service_amount->amount = $request->amount[$i];
					$service_amount->save();
				} // End For Loop	 
			}// end Else
		$notification = array(
				'message' => 'Data Updated Successfully',
				'alert-type' => 'success'
			);
			return redirect()->route('service.amount.view')->with($notification);
    } // end Method 

 	public function DetailsServiceAmount($service_id){
		$data['detailsData'] = ServiceAmount::where('service_id',$service_id)->orderBy('class_id','asc')->get();
		return view('backend.setup.service_amount.details_service_amount',$data);
 	}





} 
