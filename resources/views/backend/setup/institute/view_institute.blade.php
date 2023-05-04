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
                                <h3 class="box-title">Institution List</h3>
                                <a href="{{ route('institute.add') }}" style="float: right;"
                                    class="mb-5 btn btn-rounded btn-success"> Add Institution</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Institution Name</th>
                                                <th>Institution Address</th>
                                                <th>Institution Short Name</th>
                                                <th width="25%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $designation)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
													<td> {{ $designation->name }}</td>
                                                    <td> {{ $designation->address }}</td>
                                                    <td> {{ $designation->short_name }}</td>
                                                    <td>
                                                        <a href="{{ route('institute.edit', $designation->id) }}"
                                                            class="btn btn-info">Edit</a>
                                                        <a href="{{ route('institute.delete', $designation->id) }}"
                                                            class="btn btn-danger" id="delete">Delete</a>

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
