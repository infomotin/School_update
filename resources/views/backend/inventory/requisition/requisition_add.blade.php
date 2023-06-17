@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">
                <!-- Basic Forms -->

                    <!-- /.box-header -->
                    {{-- <div class="box-body"> --}}
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('store.requisition') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                                @php
                                                    // dd($emp_data);
                                                @endphp
                                                 <div class="box">
                                                    <div class="box-header with-border">
                                                        <h4 class="box-title">Add Requisition</h4>
                                                    </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Requisition No <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="req_no" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Requisition By <span class="text-danger">*</span></h5>
                                                            <div class="controls">

                                                                <input type="text" name="" value={{Auth()->user()->name}}
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                                <input type="hidden" name="created_by" value={{Auth()->user()->id}} />

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Requisition For <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="employee_id" required="" class="form-control">
                                                                    @foreach($user as $key=>$item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Requisition Date <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" name="req_date"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box">
                                            <div class="box-body">
                                                <div class="add_item">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <h5>Item Name <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <select name="item_id[]" required=""
                                                                        class="form-control">
                                                                        <option value="" selected="" disabled=""> Select Item</option>
                                                                        @foreach ($items as $data)
                                                                            <option value="{{ $data->id }}">{{ $data->item_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <h5>Quantity <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="item_qnty[]"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <h5>Unit <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <select name="unit_id[]" required=""
                                                                        class="form-control">
                                                                        <option value="" selected="" disabled=""> Select Unit</option>
                                                                        @foreach ($unit as $data)
                                                                            <option value="{{ $data->id }}">
                                                                                {{ $data->unit_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <h5>Amount <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="amount[]"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2" style="padding-top: 25px;">
                                                            <span class="btn btn-success addeventmore"><i
                                                                    class="fa fa-plus-circle"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-xs-right">
                                                    <input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
                                                </div>
                                            </div>

                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>


            </section>


        </div>
    </div>


  <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Item Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="item_id[]" required=""
                                            class="form-control">
                                            <option value="" selected="" disabled="">
                                                Select Item</option>
                                            @foreach ($items as $data)
                                                <option value="{{ $data->id }}">
                                                    {{ $data->item_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <h5>Quantity <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="item_qnty[]"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group">
                                    <h5>Unit <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="unit_id[]" required=""
                                            class="form-control">
                                            <option value="" selected="" disabled=""> Select Unit</option>
                                            @foreach ($unit as $data)
                                                <option value="{{ $data->id }}">
                                                    {{ $data->unit_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <h5>Amount <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="amount[]"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2" style="padding-top: 25px;">
                                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                                <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                            </div>
                        </div>
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
