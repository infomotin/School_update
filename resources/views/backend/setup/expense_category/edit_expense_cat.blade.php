@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->


		<section class="content">

			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Edit Expense Category</h4>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">

							<form method="post" action="{{ route('update.expense.category',$editData->id) }}">
								@csrf
								<div class="row">
									<div class="col-9">
										<div class="form-group">
											<h5>Expense Category Name <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="name" class="form-control"
													value="{{ $editData->name }}">
												@error('name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<h5>Expense Category <span class="text-danger">*</span></h5>
												<div class="controls">
													<select name="type" id="type" required=""
														class="form-control">
														<option value="{{ $editData->type }}" >Select Fee Category</option>
														<option value="sa" {{ $editData->type == 'sa'?'selected':'' }}>Salary</option>
														<option value="bi" {{ $editData->type == 'bi'?'selected':'' }}>Bill</option>
														<option value="pu" {{ $editData->type == 'pu'?'selected':'' }}>Purchase</option>
													</select>
												</div>
											</div>
										</div> <!-- End Col md 3 -->



										<div class="text-xs-right">
											<input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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