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
                                <h4 class="box-title">Load Student <strong>Addendance</strong></h4>
                            </div>
                            <div class="box-body">
                                <form method="GET" action="{{ route('student.year.class.wise') }}">
                                    <div class="row">
                                        {{-- load year  --}}
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Years <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <select name="year_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Years
                                                        </option>
                                                        @foreach ($years as $year)
                                                            <option value="{{ $year->id }}"
                                                                {{ @$year_id == $year->id ? 'selected' : '' }}>
                                                                {{ $year->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Class <span class="text-danger"> </span></h5>
                                                <div class="controls">
                                                    <select name="year_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Class
                                                        </option>
                                                        @foreach ($classes as $year)
                                                            <option value="{{ $year->id }}"
                                                                {{ @$year_id == $year->id ? 'selected' : '' }}>
                                                                {{ $year->name }}</option>
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
                                                    <select name="class_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Class
                                                        </option>
                                                        @foreach ($shifts as $class)
                                                            <option value="{{ $class->id }}"
                                                                {{ @$class_id == $class->id ? 'selected' : '' }}>
                                                                {{ $class->name }}</option>
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
                                                    <select name="class_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Class
                                                        </option>
                                                        @foreach ($groups as $class)
                                                            <option value="{{ $class->id }}"
                                                                {{ @$class_id == $class->id ? 'selected' : '' }}>
                                                                {{ $class->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1" style="padding-top: 25px;">
                                            <input type="submit" class="mb-5 btn btn-rounded btn-dark" name="search"
                                                value="Load . . ">
                                        </div> <!-- End Col md 4 -->
                                    </div><!--  end row -->
                                </form>
                            </div>
                        </div>
                    </div>



                    <!-- // end first col 12 -->
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Student Addendance </h3>
                                <a href="{{ route('student.registration.add') }}" style="float: right;"
                                    class="mb-5 btn btn-rounded btn-success"> Add Student Addendance</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                @php
                                    // foreach ($all_Data as $key => $value) {
                                    //     // print data 
                                    //     echo '<pre>';
                                    //     print_r($value->std_attendances);
                                    //     echo '</pre>';
                                    // }
                                @endphp
                                <div class="table-responsive">
                                    @if (!@search)
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%">SL</th>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Year</th>
                                                    <th>Class</th>
                                                    <th>Shift</th>
                                                    <th>Group</th>
                                                    <th>logIn</th>
                                                    <th>LogOut</th>
                                                    <th>Status</th>
                                                    <th width="25%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_Data as $key => $value)
                                                    {{-- echo($value); --}}
                                                    {{-- <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ date('d-m-Y', strtotime($value->['std_attendances']['att_date'])) }}</td>
                                                        <td>{{ $value['user']['name'] }}</td>
                                                        <td>{{ $value['year']['name'] }}</td>
                                                        <td>{{ $value['class']['name'] }}</td>
                                                        <td>{{ $value['shift']['name'] }}</td>
                                                        <td>{{ $value['group']['name'] }}</td>
                                                        <td>{{ date('h:i:s a', strtotime($value->['std_attendances']['login_time'])) }}</td>
                                                        <td>
                                                            @if ($value->out_time == null)
                                                                <span class="badge badge-danger">Not Yet</span>
                                                            @else
                                                                {{ date('h:i:s a', strtotime($value->['std_attendances']['logout_time'])) }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($value->status == 'Present')
                                                                <span class="badge badge-success">Present</span>
                                                            @elseif($value->status == 'Absent')
                                                                <span class="badge badge-danger">Absent</span>
                                                            @else
                                                                <span class="badge badge-warning">Leave</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('student.registration.edit', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-info">Edit</a>
                                                            <a href="{{ route('student.registration.promotion', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-success">Promotion</a>
                                                            <a href="{{ route('student.registration.details', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-primary">View</a>
                                                            <a href="{{ route('student.registration.delete', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-danger">Delete</a>
                                                        </td>
                                                    </tr> --}}
                                                @endforeach
                                                

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    @else
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
                                                @foreach ($all_Data as $key => $value)
                                                    {{-- echo($value); --}}
                                                    <tr>
                                                        <td>{{ $value }}</td>
                                                        {{-- <td>{{ date('d-m-Y', strtotime($value->std_attendances)) }}</td> --}}
                                                        {{-- <td>{{ $value->user->name }}</td>
                                                        <td>{{ $value->year->name }}</td>
                                                        <td>{{ $value->class->name }}</td>
                                                        <td>{{ $value->shift->name }}</td>
                                                        <td>{{ $value->group->name }}</td>
                                                        <td>{{ date('h:i:s a', strtotime($value->std_attendances->login_time)) }}</td>
                                                        <td> --}}
                                                            {{-- @if ($value->out_time == null)
                                                                <span class="badge badge-danger">Not Yet</span>
                                                            @else
                                                                {{ date('h:i:s a', strtotime($value->std_attendances->logout_time)) }}
                                                            @endif --}}
                                                        {{-- </td>
                                                        <td> --}}
                                                            {{-- @if ($value->status == 'Present')
                                                                <span class="badge badge-success">Present</span>
                                                            @elseif($value->status == 'Absent')
                                                                <span class="badge badge-danger">Absent</span>
                                                            @else
                                                                <span class="badge badge-warning">Leave</span>
                                                            @endif --}}
                                                        {{-- </td>
                                                        @if (Auth::user()->role == 'Admin')
                                                            <td>{{ $value->user->code }}</td>
                                                        @endif --}}
                                                        {{-- <td>
                                                            <a href="{{ route('student.registration.edit', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-info">Edit</a>
                                                            <a href="{{ route('student.registration.promotion', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-success">Promotion</a>
                                                            <a href="{{ route('student.registration.details', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-primary">View</a>
                                                            <a href="{{ route('student.registration.delete', $value->student_id) }}"
                                                                class="mb-5 btn btn-rounded btn-danger">Delete</a>
                                                        </td> --}}
                                                    </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
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
