@extends('admin.admin_master')
@section('admin')

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

{{---Add Brand Page- --}}

<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Slider </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  

	 <form method="POST" action="{{route('slider.update',$sliders->id)}}" enctype="multipart/form-data">
		@csrf

		<input type="hidden" name="id" value="{{$sliders->id}}">
		<input type="hidden" name="old_image" value="{{$sliders->slider_img}}">
		
		<div class="form-group">
		<h5>Slider Tile <span class="text-danger">*</span></h5>
		<div class="controls">
			<input type="text" name="title" class="form-control" required="" value="{{$sliders->title}}" >

			 </div>
	</div>


	<div class="form-group">
		<h5>SLider Description <span class="text-danger">*</span></h5>
		<div class="controls">
			<input type="text" name="description" class="form-control" required="" value="{{$sliders->description}}" > </div>
	</div>


	<div class="form-group">
		<h5>Slider Image <span class="text-danger">*</span></h5>
		<div class="controls">
			<input type="file" name="slider_img" class="form-control" > </div>
	</div>

	

		<div class="text-xs-right">
					<input type="submit" class="btn btn-rounded btn-info mb-5" value="Update Slider">
				</div>			
					

			</form>


					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  
			  <!-- /.box -->          
			</div>

			<!-- /.col -->





		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>




@endsection