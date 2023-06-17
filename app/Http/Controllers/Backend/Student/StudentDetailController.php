<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\StudentDetail;
use DB;
use PDF;

class StudentDetailController extends Controller
{
    public function StudentDetailAdd($id){
        $data['student'] = AssignStudent::where('student_id',$id)->first();
        // dd($data['student']['student']);
    	return view('backend.student.student_reg.student_detail_add',$data);

    }

    public function StudentDetailStore(Request $request){


        // dd($request->all());

				$student_detail = new StudentDetail();
                $student_detail->assign_student_id = $request->assign_student_id;
                $student_detail->birth_certificate = $request->birth_certificate;
                $student_detail->special_need = $request->special_need;
                $student_detail->nationality = $request->nationality;
                $student_detail->blood = $request->blood;
                $student_detail->alergic_info = $request->alergic_info;
                $student_detail->vaccine_update = $request->vaccine_update;
                if ($request->file('side_image')) {
					$file = $request->file('side_image');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/student_side_images'),$filename);
					$student_detail['side_image'] = $filename;
				}

                $student_detail->cr_name = $request->cr_name;
                $student_detail->cr_address = $request->cr_address;
                $student_detail->cr_relation = $request->cr_relation;
                $student_detail->cr_contact = $request->cr_contact;
                $student_detail->cr_nid = $request->cr_nid;
                if ($request->file('cr_photo')) {
					$file = $request->file('cr_photo');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/cr_images'),$filename);
					$student_detail['cr_photo'] = $filename;
				}

                $student_detail->f_employment = $request->f_employment;
                $student_detail->f_address = $request->f_address;
                $student_detail->f_contact = $request->f_contact;
                $student_detail->f_nid = $request->f_nid;
                if ($request->file('f_photo')) {
					$file = $request->file('f_photo');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/f_images'),$filename);
					$student_detail['f_photo'] = $filename;
				}

                $student_detail->m_employment = $request->m_employment;
                $student_detail->m_address = $request->m_address;
                $student_detail->m_contact = $request->m_contact;
                $student_detail->m_nid = $request->m_nid;
                if ($request->file('m_photo')) {
					$file = $request->file('m_photo');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/m_images'),$filename);
					$student_detail['m_photo'] = $filename;
				}

                $student_detail->paf_name = $request->paf_name;
                $student_detail->paf_address = $request->paf_address;
                $student_detail->paf_relation = $request->paf_relation;
                $student_detail->paf_contact = $request->paf_contact;
                $student_detail->paf_nid = $request->paf_nid;
                if ($request->file('paf_photo')) {
					$file = $request->file('paf_photo');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/paf_images'),$filename);
					$student_detail['paf_photo'] = $filename;
				}

                $student_detail->pas_name = $request->pas_name;
                $student_detail->pas_address = $request->pas_address;
                $student_detail->pas_relation = $request->pas_relation;
                $student_detail->pas_contact = $request->pas_contact;
                $student_detail->pas_nid = $request->pas_nid;
                if ($request->file('pas_photo')) {
					$file = $request->file('pas_photo');
					$filename = date('YmdHi').$file->getClientOriginalName();
					$file->move(public_path('upload/pas_images'),$filename);
					$student_detail['pas_photo'] = $filename;
				}

				
				$student_detail->save();

    	$notification = array(
    		'message' => 'Student Details Added Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.registration.view')->with($notification);

    } // End Method 






} 
