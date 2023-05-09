@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Attendance </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('store.student.daily.attendance') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <h5>Attendance Date <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="date" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Class Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="class_id" id="class_id" required
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Class
                                                                </option>
                                                                @foreach ($classes as $class)
                                                                    <option value="{{ $class->id }}">
                                                                        {{ $class->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Shift Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="shift_id" id="shift_id" required
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Shift
                                                                </option>
                                                                @foreach ($shifts as $shift)
                                                                    <option value="{{ $shift->id }}">
                                                                        {{ $shift->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Group Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="group_id" id="group_id" required
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select
                                                                    Group
                                                                </option>
                                                                @foreach ($groups as $group)
                                                                    <option value="{{ $group->id }}">
                                                                        {{ $group->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- // End Col md 6 -->
                                                <div class="col-md-1" style="padding-top: 25px;">
                                                    <input type="submit" class="mb-5 btn btn-rounded btn-dark"
                                                        name="search" value="Data Load.">
                                                </div>
                                            </div>
                                            <!-- // end Row  -->

                                            @if (!@search)
                                                <div class="row" hidden>
                                                    <div class="col-md-12">

                                                        <table class="table table-bordered table-striped"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Sl</th>
                                                                    <th class="text-center"
                                                                        style="vertical-align: middle;">Student List</th>
                                                                    <th class="text-center"
                                                                        style="vertical-align: middle;">Class Name</th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Roll</th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Attendance
                                                                        Status</th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">login
                                                                        Time</th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">logout
                                                                        Time</th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ( $students as $key=>$value )
                                                                    <tr>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">{{ $key + 1 }}
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->fname }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->class }}
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->roll }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="radio" name="attend[{{ $value->id }}]"
                                                                                value="Present" required> Present
                                                                            <input type="radio" name="attend[{{ $value->id }}]"
                                                                                value="Absent"> Absent
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="time" name="attend_time[{{ $value->id }}]"
                                                                                class="form-control"
                                                                                style="width: 100px">
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="time" name="leave_time[{{ $value->id }}]"
                                                                                class="form-control"
                                                                                style="width: 100px">
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="hidden" name="student_id[]"
                                                                                value="{{ $value->student_id }}">
                                                                            <input type="hidden" name="class_id[]"
                                                                                value="{{ $value->class_id }}">
                                                                            <input type="hidden" name="date[]"
                                                                                value="{{ date('d-m-y') }}">
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div> <!-- // End Col md 12 -->
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <table class="table table-bordered table-striped"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center"
                                                                        style="vertical-align: middle;">Sl
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Student List
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Class Name
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Roll
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Attendance
                                                                        Status
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">login
                                                                        Time
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">logout
                                                                        Time
                                                                    </th>
                                                                    <th  class="text-center"
                                                                        style="vertical-align: middle;">Actions
                                                                    </th>
                                                                </tr>

                                                            </thead>
                                                            <tbody>
                                                               @foreach ( $students as $key=>$value )
                                                                    <tr>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">{{ $key + 1 }}
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->fname }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->class }}
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $value->roll }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="radio" name="attend[{{ $value->id }}]"
                                                                                value="Present" required> Present
                                                                            <input type="radio" name="attend[{{ $value->id }}]"
                                                                                value="Absent"> Absent
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="time" name="attend_time[{{ $value->id }}]"
                                                                                class="form-control"
                                                                                style="width: 100px">
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="time" name="leave_time[{{ $value->id }}]"
                                                                                class="form-control"
                                                                                style="width: 100px">
                                                                        </td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            <input type="hidden" name="student_id[]"
                                                                                value="{{ $value->student_id }}">
                                                                            <input type="hidden" name="class_id[]"
                                                                                value="{{ $value->class_id }}">
                                                                            <input type="hidden" name="date[]"
                                                                                value="{{ date('d-m-y') }}">
                                                                        </td>

                                                                        
                                                                        
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- // End Col md 12 -->
                                                </div>
                                            @endif
                                            <!-- // end Row  -->

                                            <div class="text-xs-right">
                                                <input type="submit" class="mb-5 btn btn-rounded btn-info"
                                                    value="Submit">
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
