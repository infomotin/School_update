@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Currency</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                            <form method="post" action="{{ route('store.currency') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Currency Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="currency_name" class="form-control">
                                                    @error('currency_name')
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
                                                                <option value="0" >No </option>
                                                                <option value="1" selected>Yes </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Conversion Rate</h5>
                                                <div class="controls">
                                                    <input type="text" name="conversion_rate" class="form-control">
                                                    @error('conversion_rate')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Converted Currency </h5>
                                                <div class="controls">
                                                    <select name="conversion_currency_id "  class="form-control">
                                                        <option value="" selected="" disabled="">Select an Option</option>
                                                        @foreach($currencies as $key=>$item)
                                                                <option value="{{$item->id}}">{{$item->currency_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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
