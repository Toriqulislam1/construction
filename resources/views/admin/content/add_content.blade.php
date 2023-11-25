@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Services </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

                <form method="POST" action="{{ route('content-store') }}" enctype="multipart/form-data" >
		 	        @csrf

	                <div class="row">
	                    <div class="col-12">

                                <div class="row"> <!-- start 2nd row  -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <h5>Thumbnail Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="thamble" class="form-control"  required="" >
                                                    @error('thamble')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                        </div>
                                    </div> <!-- end col md 4 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5> Title <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="breadcrum_title" class="form-control" required="">
                                                @error('breadcrum_title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> <!-- end col md 4 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Short Description  <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                        <textarea name="content_descrip" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                            </div>
                                        </div>
                                </div> <!-- end col md 4 -->

		                    </div> <!-- end 2nd row  -->

                            <div class="row">
                                <span class="">Detail page start</span>
                            </div>
                            <hr>
		                    <div class="row"> <!-- start 3rd row  -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Banner for detail page <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="breadcrumb" class="form-control" onChange="mainThamUrl(this)" required="" >
                                            @error('breadcrumb')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end col md 4 -->
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Title for detail page  <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                            <input type="text" name="content_title" class="form-control" required="">
                                            @error('content_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                </div> <!-- end col md 4 -->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>sub title for detail page <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="sub_title" class="form-control" required="">
                                            @error('detail_short_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end col md 4 -->
		                    </div> <!-- end 3rd row  -->

                            <div class="row"> <!-- start 4nd row  -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Category Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="cat_name" class="form-control"  required="" >
                                            @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end col md 6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5> short description for sub title in detail page <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="s_dst" class="form-control" required="">
                                        @error('content_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                            </div> <!-- end col md 6 -->
                        </div> <!-- end 4nd row  -->

                        <div class="row"> <!-- start 5rd row  -->
                            <div class="col-md-6">
                                <div class="form-group">
                                        <h5> Project Size <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="p_name" class="form-control"  required="" >
                                            @error('thamble')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                </div>
                            </div> <!-- end col md 6 -->
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <h5> Project Short Description  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                    <textarea name="p_desc" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                        </div>
                                    </div>
                            </div> <!-- end col md 6 -->

                        </div> <!-- end 5rd row  -->

                            <div class="row"> <!-- start 6rd row  -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Long Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea id="editor1" name="long_descrip" rows="10" cols="80">
                                                Long Description
                                            </textarea>
                                        </div>
                                    </div>
                                </div> <!-- end col md 12 -->
                            </div> <!-- end 6rd row  -->

	                        <hr>

	                    <div class="row">

                            <div class="text-lg-center">
                                <input type="submit" class="btn btn-primary" value="Add Service">
                            </div>
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
		<!-- /.content -->
	  </div>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

@endsection
