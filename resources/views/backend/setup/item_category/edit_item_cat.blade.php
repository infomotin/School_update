@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->


		<section class="content">

			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Edit Item Category</h4>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">

							<form method="post" action="{{ route('update.item.category',$editData->id) }}">
								@csrf
								<div class="row">
									<div class="col-9">
										<div class="form-group">
											<h5>Item Category Name <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="cat_name" class="form-control"
													value="{{ $editData->cat_name }}">
												@error('name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
										</div>
										<div class="col-md-3 d-flex align-items-center">
											<input type="submit" class="btn btn-rounded btn-info" value="Submit">
										</div>
							</form>

						
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