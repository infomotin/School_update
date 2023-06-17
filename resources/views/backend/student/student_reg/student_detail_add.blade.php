@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- @php dd($student['student']); @endphp --}}
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Student Detail information</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="post" action="{{ route('student.detail.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <legend> Student Personal Information </legend>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Student Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" value={{$student['student']->name}} class="form-control">
                                                            <input type="hidden" name="assign_student_id" value={{$student->id}} class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Gender <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="gender" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Gender</option>
                                                                <option value="Male" {{$student['student']->gender==='Male'?'selected':''}}>Male</option>
                                                                <option value="Female" {{$student['student']->gender==='Female'?'selected':''}}>Female</option>
                                                                <option value="Other" {{$student['student']->gender==='Other'?'selected':''}}>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Date of Birth <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="dob" class="form-control" value="{{$student['student']->dob}}"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Birth Certificate No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="birth_certificate" class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Religion <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="religion" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Religion</option>
                                                                <option value="Islam" {{$student['student']->religion==='Islam'?'selected':''}}>Islam</option>
                                                                <option value="Hindu" {{$student['student']->religion==='Hindu'?'selected':''}}>Hindu</option>
                                                                <option value="Christan" {{$student['student']->religion==='Christan'?'selected':''}}>Christan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5> Nationality <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="nationality" required="" class="form-control">
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Alergic Information <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="alergic_info"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5> Blod Group <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="blood" required="" class="form-control">
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5> Special Needs <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="special_need" required="" class="form-control">
                                                                <option value="1">Yes</option>
                                                                <option value="0" selected>No</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Vaccination Update <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="vaccine_update"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <h5>Front Image <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control image" data-name="Front">
                                                        </div>
                                                    </div>

                                                </div> <!-- End Col md 4 -->


                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showFrontImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <h5>Side Image <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="side_image" class="form-control image" data-name="Side">
                                                        </div>
                                                    </div>

                                                </div> <!-- End Col md 4 -->


                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showSideImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <legend>Child Response To </legend>
                                            <div class="row add_item">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cr_name"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Relation To Child <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="cr_relation" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Relation</option>
                                                                <option value="Father">Father</option>
                                                                <option value="Mother">Mother</option>
                                                                <option value="GFather">Grand Father</option>
                                                                <option value="GMother">Grand Mother</option>
                                                                <option value="Aunty">Aunty</option>
                                                                <option value="Uncle">Uncle</option>
                                                                <option value="Other">Other</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cr_address"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Contact No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cr_contact"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>NID No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cr_nid"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row add_item">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Photo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="cr_photo" class="form-control image"  data-name="Res">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showResImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <legend>Father Information</legend>
                                            <div class="row add_item">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Father's Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="fname" value={{$student['student']->fname}}
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Place Of Employment <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="f_employment"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="f_address"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Contact No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="f_contact"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>NID No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="f_nid"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Photo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="f_photo" class="form-control image" data-name="Father">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showFatherImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <legend>Mother's Information</legend>
                                            <div class="row add_item">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Mother's Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mname" value={{$student['student']->mname}}
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Place Of Employment <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="m_employment"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="m_address"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Contact No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="m_contact"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>NID No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="m_nid"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Photo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="m_photo" class="form-control image" data-name="Mother">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showMotherImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <legend>Person Authorized To Pick Up (First)</legend>
                                            <div class="row add_item">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="paf_name"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Relation To Child <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="paf_relation" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Relation</option>
                                                                <option value="Father">Father</option>
                                                                <option value="Mother">Mother</option>
                                                                <option value="GFather">Grand Father</option>
                                                                <option value="GMother">Grand Mother</option>
                                                                <option value="Aunty">Aunty</option>
                                                                <option value="Uncle">Uncle</option>
                                                                <option value="Other">Other</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="paf_address"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Contact No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="paf_contact"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>NID No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="paf_nid"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Photo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="paf_photo" class="form-control image" data-name="Paf">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showPafImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <legend>Person Authorized To Pick Up ( Two ) </legend>
                                            <div class="row add_item">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pas_name"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Relation To Child <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                        <select name="pas_relation" id="religion" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Relation</option>
                                                                <option value="Father">Father</option>
                                                                <option value="Mother">Mother</option>
                                                                <option value="GFather">Grand Father</option>
                                                                <option value="GMother">Grand Mother</option>
                                                                <option value="Aunty">Aunty</option>
                                                                <option value="Uncle">Uncle</option>
                                                                <option value="Other">Other</option>
                                                            </select> 
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pas_address"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Contact No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pas_contact"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>NID No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pas_nid"
                                                            class="form-control"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row add_item">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Photo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="pas_photo" class="form-control image" data-name="Pat">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showPatImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image').change(function(e) {
                let name = $(this).data('name');
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show'+name+'Image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
