@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->


		<section class="content">

			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Edit Item Sub Category</h4>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">

							<form method="post" action="{{ route('update.item.subcategory',$sub_category->id) }}">
								@csrf
								<div class="row">
									<div class="col-9">
										<div class="form-group">
											<h5>Item Sub Category Name <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="sub_cat_name" class="form-control"
													value="{{ $sub_category->sub_cat_name }}">
												@error('name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<h5>Item  Category <span class="text-danger">*</span></h5>
												<div class="controls">
													<select name="category_id" id="category_id" required=""
														class="form-control">
														<option value="" >Select Item Category</option>
														@foreach($category as $key => $item)
															<option value="{{$item->id}}" {{ $sub_category->category_id == $item->id?'selected':'' }}>{{$item->cat_name}}</option>
														@endforeach
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