@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col-6">
                        <div class="overflow-hidden box pull-up">
                            <div class="box-body">
                                <div class="rounded icon bg-primary-light w-60 h-60">
                                    <i class="mr-0 text-primary font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="mt-20 mb-0 text-mute font-size-16">All Students</p>
									@php
															$students = DB::table('users')->where('usertype', 'Student')->count();
														@endphp
                                    <h3 class="mb-0 text-white font-weight-500">{{ $students }} <small class="text-success"><i
                                                class="fa fa-caret-up"></i></small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="overflow-hidden box pull-up">
                            <div class="box-body">
                                <div class="rounded icon bg-warning-light w-60 h-60">
                                    <i class="mr-0 text-warning font-size-24 mdi mdi-car"></i>
                                </div>
                                <div>
                                    <p class="mt-20 mb-0 text-mute font-size-16">Top Class</p>
									@php
															$classes = DB::table('student_classes')->count();
														@endphp
                                    <h3 class="mb-0 text-white font-weight-500">{{ $classes }} <small class="text-success"><i
                                                class="fa fa-caret-up"></i> +2.5%</small>
											</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="overflow-hidden box pull-up">
                            <div class="box-body">
                                <div class="rounded icon bg-info-light w-60 h-60">
                                    <i class="mr-0 text-info font-size-24 mdi mdi-sale"></i>
                                </div>
                                <div>
                                    <p class="mt-20 mb-0 text-mute font-size-16">Employees</p>
									@php
															// usertype not in Student in users
															$employys = DB::table('users')->whereNotIn('usertype', ['Student','Admin'])->count();
															
															
														
														@endphp
                                    <h3 class="mb-0 text-white font-weight-500">{{ $employys }} <small class="text-danger"><i
                                                class="fa fa-caret-down"></i> -0.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="overflow-hidden box pull-up">
                            <div class="box-body">
                                <div class="rounded icon bg-danger-light w-60 h-60">
                                    <i class="mr-0 text-danger font-size-24 mdi mdi-phone-incoming"></i>
                                </div>
                                <div>
                                    <p class="mt-20 mb-0 text-mute font-size-16">Total Teacher</p>
									@php
															$employys = DB::table('users')->where('usertype', 'employee')->count();
														@endphp
                                    <h3 class="mb-0 text-white font-weight-500">{{ $employys }} <small class="text-danger"><i
                                                class="fa fa-caret-up"></i> -1.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    Notifiaction To All Students
                                    <small class="subtitle">
										{{-- describe your page in small --}}
										
									</small>
                                </h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 250px"><span class="text-white">Shift</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">Group</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">Section</span></th>
                                                <th style="min-width: 150px"><span class="text-fade">Class </span></th>
                                                <th style="min-width: 130px"><span class="text-fade">Students</span></th>
                                                <th style="min-width: 120px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-8 pl-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 mr-20">
                                                            <div class="bg-img h-50 w-50"
                                                                style="background-image: url(../images/gallery/creative/img-1.jpg)">
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <a href="#"
                                                                class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus
                                                                consectetur</a>
                                                            <span class="text-fade d-block">
																
															</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45,800k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Sophia
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        Pharetra
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-primary-light badge-lg">Approved</span>
                                                </td>
                                                <td class="text-right">
                                                    <a href="#"
                                                        class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span
                                                            class="mdi mdi-bookmark-plus"></span></a>
                                                    <a href="#"
                                                        class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span
                                                            class="mdi mdi-arrow-right"></span></a>
                                                </td>
                                            </tr>
											
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    Notifiaction To All Students
                                    <small class="subtitle">
										{{-- describe your page in small --}}
										
									</small>
                                </h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 250px"><span class="text-white">Shift</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">Group</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">Section</span></th>
                                                <th style="min-width: 150px"><span class="text-fade">Class </span></th>
                                                <th style="min-width: 130px"><span class="text-fade">Students</span></th>
                                                <th style="min-width: 120px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-8 pl-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 mr-20">
                                                            <div class="bg-img h-50 w-50"
                                                                style="background-image: url(../images/gallery/creative/img-1.jpg)">
                                                            </div>
                                                        </div>
														{{-- show all students here using DB::table --}}
														
                                                        <div>
                                                            <a href="#"
                                                                class="mb-1 text-white font-weight-600 hover-primary font-size-16">
                                                                {{ $students }}</a>
                                                            <span class="text-fade d-block">
																
															</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45,800k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Sophia
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        Pharetra
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-primary-light badge-lg">Approved</span>
                                                </td>
                                                <td class="text-right">
                                                    <a href="#"
                                                        class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span
                                                            class="mdi mdi-bookmark-plus"></span></a>
                                                    <a href="#"
                                                        class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span
                                                            class="mdi mdi-arrow-right"></span></a>
                                                </td>
                                            </tr>
											
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
