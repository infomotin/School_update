@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->

		<section class="content">

			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Edit Department</h4>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							<form method="post" action="{{ route('update.department',$editData->id) }}">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<h5>Department Name <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="dep_name" class="form-control"
													value="{{ $editData->dep_name }}">
												@error('dep_name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
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