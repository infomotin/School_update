@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->


		<section class="content">

			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Add Assets </h4>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<form method="post" action="{{ route('store.expense.assets') }}"
								enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="row">
											<!-- 1st Row -->
											<div class="col-md-6">

												<div class="form-group">
													<h5>Name <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="name" class="form-control" required="" value="{{old('name')}}">
													</div>
												</div>

											</div> <!-- End Col md 3 -->

											<div class="col-md-3">
												<div class="form-group">
													<h5>Asset Type <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="type" id="type" required="" class="form-control">
															<option value="" disabled="">Select Fee Category
															</option>
															<option value="se" {{old('type')==='se'?'selected':''}}>Service</option>
															<option value="ma" {{old('type')==='ma'?'selected':''}}>Material</option>

														</select>
													</div>
												</div>
											</div> <!-- End Col md 3 -->
											<div class="col-md-3">

												<div class="form-group">
													<h5>Quantity <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="quantity" class="form-control" value="{{old('quantity')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->
											<div class="col-md-3">

												<div class="form-group">
													<h5>Price <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="price" class="form-control" value="{{old('price')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->
											<div class="col-md-3">

												<div class="form-group">
													<h5>Amount <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="amount" class="form-control" value="{{old('amount')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->
											<div class="col-md-3">

												<div class="form-group">
													<h5>Purchase Date <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="date" name="pur_date" class="form-control" value="{{old('pur_date')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->
											<div class="col-md-3">

												<div class="form-group">
													<h5>Service Duration<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="duration" class="form-control" value="{{old('duration')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->


											<div class="col-md-3">

												<div class="form-group">
													<h5>Deplation Percent<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="dep_percent" class="form-control" value="{{old('dep_percent')}}"
															required="">
													</div>
												</div>

											</div> <!-- End Col md 3 -->




										</div> <!-- End 1st Row -->
										<div class="text-xs-right">
											<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
										</div>

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

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection