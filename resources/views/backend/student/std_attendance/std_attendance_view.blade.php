@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box bb-3 border-warning">
                        <div class="box-header">
                            <h4 class="box-title">Load Student <strong>Attendance</strong></h4>
                        </div>
                        <div class="box-body">

                            <form method="POST" action="{{ route('liststudent.year.class.shift.group.att') }}">
                                <div class="row">
                                    {{-- load year --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Years <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="year_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Years
                                                    </option>
                                                    @foreach ($years as $year)
                                                    <option value="{{ $year->id }}" {{ @$year_id==$year->id ? 'selected'
                                                        : '' }}>
                                                        {{ $year->name }}</option>
                                                    @endforeach
                                                </select>
                                                @csrf
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Class <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="class_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Class
                                                    </option>
                                                    @foreach ($classes as $year)
                                                    <option value="{{ $year->id }}" {{ @$year_id==$year->id ? 'selected'
                                                        : '' }}>{{ $year->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col md 4 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Shift <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="shift_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Shift
                                                    </option>
                                                    @foreach ($shifts as $shift)
                                                    <option value="{{ $shift->id }}" {{ @$class_id==$shift->id ?
                                                        'selected' : '' }}>
                                                        {{ $shift->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col md 4 -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <h5>Group <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="group_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Group
                                                    </option>
                                                    @foreach ($groups as $group)
                                                    <option value="{{ $group->id }}" {{ @$class_id==$group->id ?
                                                        'selected' : '' }}>
                                                        {{ $group->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--  end row -->
                                <div class="pt-5 row justify-content-end">

                                    <input type="submit" class="mb-5 btn btn-rounded btn-info m-5 col-sm-2"
                                        name="search" value="View Student Att Data">
                                    <input type="submit" class="mb-5 btn btn-rounded btn-primary m-5 col-sm-2"
                                        name="add" value="Add Student Addendance">

                                </div> <!-- End Col md 4 -->
                            </form>
                        </div>
                    </div>
                </div>

                @php
                // foreach ($allData as $key => $value) {
                // print_r((array)$value['att_date']);
                // }
                @endphp




                <!-- // end first col 12 -->
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Addendance </h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="table-responsive">
                                {{-- view part --}}

                                @if($mode==='v')
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="2%">SL</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Class</th>
                                            <th>Shift</th>
                                            <th>Group</th>
                                            <th>logIn</th>
                                            <th>LogOut</th>
                                            <th>Status</th>
                                            @if (Auth::user()->role == 'Admin')
                                            <th>Code</th>
                                            @endif
                                            <th width="15%">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date('d-m-Y', strtotime($value->att_date)) }}</td>
                                            <td>{{ $value->fname }}</td>
                                            <td>{{ $value->year }}</td>
                                            <td>{{ $value->class }}</td>
                                            <td>{{ $value->shift }}</td>
                                            <td>{{ $value->group }}</td>
                                            <td>{{ date('h:i:s a', strtotime($value->login_time)) }}</td>
                                            <td>{{ date('h:i:s a', strtotime($value->logout_time)) }}</td>
                                            <td>{{ $value->att_status }}</td>
                                            @if (Auth::user()->role == 'Admin')
                                            <td>{{ $value->code }}</td>
                                            @endif
                                            @if (Auth::user()->role == 'Admin')
                                            <td>
                                                <a href="#" class="btn btn-rounded btn-info mb-5">Edit</a>
                                                <a href="#" class="btn btn-rounded btn-success mb-5">Details</a>
                                            </td>
                                            @else
                                            <td>
                                                <a href="#" class="btn btn-rounded btn-success mb-5">Details</a>
                                            </td>
                                            @endif
                                            @endforeach
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                @else
                                <form method="POST" action="{{ route('store.student.daily.attendance') }}">
                                    @csrf
                                    <table class="table table-bordered table-striped" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Sl</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Student List</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Class Name</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Roll</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Attendance
                                                    Status</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    login
                                                    Time</th>
                                                <th class="text-center" style="vertical-align: middle;">
                                                    logout
                                                    Time</th>
                                                @if (Auth::user()->role == 'Admin')
                                                <th class="text-center" style="vertical-align: middle;">
                                                    Actions</th>
                                                @endif
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($students as $key => $value)
                                            {{-- @php dd($value); @endphp --}}
                                            <tr>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    {{ $key + 1 }}
                                                </td>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    {{ $value->fname }}</td>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    {{ $value->class }}
                                                </td>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    {{ $value->roll }}</td>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    <select name="att_status[{{$value->id_no}}]" id="">
                                                        <option value="P">Present</option>
                                                        <option value="A">Absent</option>
                                                        <option value="L">Late</option>
                                                        <option value="E">Early</option>


                                                    </select>
                                                </td>

                                                <td class="text-center" style="vertical-align: middle;">
                                                    <input type="time" name="login_time[{{$value->id_no}}]" class="form-control"
                                                        style="width: 100px">
                                                </td>
                                                <td class="text-center" style="vertical-align: middle;">
                                                    <input type="time" name="logout_time[{{$value->id_no}}]" class="form-control"
                                                        style="width: 100px">
                                                        <input type="hidden" name="student_id[]" value="{{$value->id_no}}">
                                                </td>

                                                @if (Auth::user()->role == 'Admin')
                                                <td class="text-center" style="vertical-align: middle;">
                                                    <a href="#" class="btn btn-info btn-sm"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="text-xs-right">
                                        <input type="hidden" name="date" value="{{ date('d-m-y') }}">
                                        <input type="submit" class="mb-5 btn btn-rounded btn-info"
                                            value="Submit">
                                        
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection