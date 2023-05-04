@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Setup Master Data </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('masterdata.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <!-- 1st Row -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Institution Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Institution code <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="code" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Address Line One <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address_line_1" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div> <!-- End 1stRow -->
                                            <div class="row">
                                                <!-- 2nd Row -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Address Line Two <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address_line_2" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Contract No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="contact_no" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>status <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="status" id="status" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Status</option>
                                                                <option value="0">inactive</option>
                                                                <option value="1">active</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div>
                                            <!-- End 2nd Row -->
                                            <div class="row">
                                                <!-- 2nd Row -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Website <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="website" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Footer Text <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="footer_text" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div>

                                            <div class="row">
                                                <!-- 2nd Row -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>footer_address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="footer_address" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>footer_contact_no <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="footer_contact_no" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>footer_email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="footer_email" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div>


                                            <div class="row">
                                                <!-- 3rd Row -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>moto <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="moto" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>mission <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mission" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>vision <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="vision" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div> <!-- End 3rd Row -->
                                            <div class="row">
                                                <!-- 4TH Row -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Salary <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="salary" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Joining Date <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="join_date" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>footer_logo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="footer_logo" class="form-control"
                                                                id="image">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                            </div>
                                             <div class="row">
                                                <!-- 4TH Row -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>footer_whatsapp <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="footer_whatsapp" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>date_of_Stub <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="date_of_Stub" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>logo <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="logo" class="form-control"
                                                                id="image">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                                style="width: 100px; width: 100px; border: 1px solid #000000;">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 3 -->
                                            </div>

                                            <!-- End 4TH Row -->
                                            <div class="text-xs-right">
                                                <input type="submit" class="mb-5 btn btn-rounded btn-info"
                                                    value="Submit">
                                            </div>
                                        </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>





        </div>
    </div>
@endsection
