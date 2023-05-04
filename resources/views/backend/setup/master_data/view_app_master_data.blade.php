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
                                <h3 class="box-title">Basic Information About Institution </h3>
                             
                                   
                                    @if(count($allData) == 0)
                                    <a href="{{ route('masterdata.add') }}" style="float: right;"
                                    class="mb-5 btn btn-rounded btn-success"> Insert Data </a>
                                    @endif
                                    
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th width="15%">Name</th>
                                                <th>Reg. No</th>
                                                <th width="10%">Address</th>
                                                <th width="7%">Email</th>
                                                <th>Phone</th>
                                                <th>Website</th>
                                                <th>Get Going </th>
                                                <th width="5%">Logo </th>
                                                
                                                @if (Auth::user()->role == 'Admin')
                                                    <th>Code</th>
                                                @endif
                                                <th >Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $Institution)
                                                
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
