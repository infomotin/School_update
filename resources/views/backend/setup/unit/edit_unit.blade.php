@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Unit</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('update.unit', $unit->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Unit Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{$unit->unit_name}}" name="unit_name" class="form-control">
                                                    @error('unit_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Is Root <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="is_root" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select an Option</option>
                                                                <option value="0" {{$unit->is_root==0?'selected':''}}>No </option>
                                                                <option value="1" {{$unit->is_root==1?'selected':''}}>Yes </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Conversion Rate</h5>
                                                <div class="controls">
                                                    <input type="text" name="conversion_rate" class="form-control" value="{{$unit->conversion_rate}}">
                                                    @error('conversion_rate')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Converted Unit </h5>
                                                <div class="controls">
                                                    <select name="conversion_unit_id "  class="form-control">
                                                        <option value="" selected="" disabled="">Select an Option</option>
                                                        @foreach($units as $key=>$item)
                                                                <option value="{{$item->id}}" {{$unit->conversion_unit_id==$item->id?'selected':''}}>{{$item->unit_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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
