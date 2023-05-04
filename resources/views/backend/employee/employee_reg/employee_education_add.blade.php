@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Employee Education</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.employee.education') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="add_item">

                                                @php
                                                    // dd($emp_data);
                                                @endphp

                                                <div class="form-group">
                                                    <h5>Employee Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="employee_id" required="" class="form-control">
                                                            <option value="{{ $emp_data->id_no }}">{{ $emp_data->name }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div> <!-- // end form group -->
                                                <div class="row">

                                                    <div class="col-md-2">

                                                        <div class="form-group">
                                                            <h5>Institution Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="edu_ins_id[]" required=""
                                                                    class="form-control">
                                                                    <option value="" selected="" disabled="">
                                                                        Select Institution</option>
                                                                    @foreach ($ins_data as $subject)
                                                                        <option value="{{ $subject->id }}">
                                                                            {{ $subject->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- // end form group -->
                                                    </div> <!-- End col-md-5 -->
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Degree <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="degree_name[]"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End col-md-5 -->

                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Board <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="board[]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End col-md-5 -->
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>P. Year <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="passing_year[]"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Result <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="result[]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Duration <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="duration[]"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Achiev. <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="achievement[]"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>CGPA <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="cgpa[]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <h5>Group <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="group[]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End col-md-5 -->
                                                    <div class="col-md-2" style="padding-top: 25px;">
                                                        <span class="btn btn-success addeventmore"><i
                                                                class="fa fa-plus-circle"></i> </span>
                                                    </div>
                                                    <!-- End col-md-5 -->

                                                </div>
                                                <!-- end Row -->

                                            </div> <!-- // End add_item -->

                                            <div class="text-xs-right">
                                                <input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
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


    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">

                    <div class="col-md-2">

                        <div class="form-group">
                            <h5>Institution Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="edu_ins_id[]" required="" class="form-control">
                                    <option value="" selected="" disabled="">
                                        Select Institution</option>
                                    @foreach ($ins_data as $subject)
                                        <option value="{{ $subject->id }}">
                                            {{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- // end form group -->
                    </div>
                    <!-- End col-md-5 -->


                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Degree <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="degree_name[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End col-md-5 -->

                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Board <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="board[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End col-md-5 -->
                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>P. Year <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="passing_year[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Result <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="result[]" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Duration <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="duration[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Achiev. <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="achievement[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>CGPA <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="cgpa[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <h5>Group <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="group[]" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2" style="padding-top: 25px;">
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                    </div><!-- End col-md-2 -->




                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", '.removeeventmore', function(event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });

        });
    </script>
@endsection
