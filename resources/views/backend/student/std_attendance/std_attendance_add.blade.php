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
                                                                @foreach ($students as $key => $employee)
                                                                    <tr id="div{{ $employee->id }}" class="text-center">
                                                                        <input type="hidden" name="employee_id[]"
                                                                            value="{{ $employee->id }}">
                                                                        <td>{{ $key + 1 }}</td>
                                                                        <td>{{ $employee->name }}</td>
                                                                        <td>{{ $employee->name }}</td>
                                                                        <td>{{ $employee->name }}</td>
                                                                        <td>
                                                                            <select
                                                                                name="attendance_status[{{ $employee->id }}]"
                                                                                id="attendance_status{{ $key + 1 }}"
                                                                                class="form-control attendance_status{{ $key + 1 }}">
                                                                                
                                                                                <option value="" selected=""
                                                                                    disabled="">
                                                                                    Select Status</option>
                                                                                <option value="Present">Present
                                                                                </option>
                                                                                <option value="Absent">Absent</option>
                                                                                <option value="Late">Late</option>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <input type="date"
                                                                                name="login_time[{{ $employee->id }}]"
                                                                                id="login_time{{ $key + 1 }}"
                                                                                class="form-control login_time{{ $key + 1 }}"
                                                                                placeholder="Login Time">
                                                                        </td>
                                                                        <td>
                                                                            <input type="date"
                                                                                name="logout_time[{{ $employee->id }}]"
                                                                                id="logout_time{{ $key + 1 }}"
                                                                                class="form-control logout_time{{ $key + 1 }}"
                                                                                placeholder="Logout Time">
                                                                        </td>
                                                                        <td>
                                                                            {{-- action button  --}}

                                                                            <div class="col-md-12">
                                                                                <div
                                                                                    class="btn-group btn-group-mini btn-corner">
                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-info"
                                                                                        title="Edit">
                                                                                        <i
                                                                                            class="ace-icon fa fa-pencil"></i>
                                                                                    </a>

                                                                                    <a href="#"
                                                                                        class="btn btn-xs btn-danger"
                                                                                        title="Delete">
                                                                                        <i
                                                                                            class="ace-icon fa fa-trash-o"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

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
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
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
