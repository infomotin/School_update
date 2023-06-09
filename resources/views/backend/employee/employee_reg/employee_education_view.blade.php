@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">



                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Employee List</h3>
                                <a href="{{ route('employee.registration.add') }}" style="float: right;"
                                    class="mb-5 btn btn-rounded btn-success"> Add Employee</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Name</th>
                                                <th>ID NO</th>
                                                <th>Mobile</th>
                                                <th>Gender</th>
                                                <th>Join Date</th>
                                                <th>Edudtls Status</th>
                                                @if (Auth::user()->role == 'Admin')
                                                    <th>Code</th>
                                                @endif
                                                <th width="20%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $employee)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td> {{ $employee->name }}</td>
                                                    <td> {{ $employee->id_no }}</td>
                                                    <td> {{ $employee->mobile }}</td>
                                                    <td> {{ $employee->gender }}</td>
                                                    <td> {{ $employee->join_date }}</td>
                                                    <td> {{ $employee->salary }}</td>
                                                    @if (Auth::user()->role == 'Admin')
                                                        <td> {{ $employee->code }}</td>
                                                    @endif
                                                    <td >
                                                        <a href="{{ route('employee.education.add', $employee->id) }}"
                                                            class="btn btn-info btn-sm">Add Education</a>
                                                        <a href="{{ route('employee.officeinfo.add', $employee->id) }}"
                                                            class="btn btn-primary btn-sm">Office Info</a>
                                                        <a target="_blank"
                                                            href="{{ route('employee.registration.details', $employee->id) }}"
                                                            class="btn btn-danger btn-sm">Full Profile</a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
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
