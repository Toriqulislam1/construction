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
                <h4 class="box-title">Update Project</h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="POST" action="{{ route('project-update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$projects->id }}">
                            <input type="hidden" name="old_img_thum" value="{{ $projects->thumbnail_img }}">
                            <input type="hidden" name="old_img_banner" value="{{ $projects->details_banner}}">

                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <!-- start 2nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Project Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="thum_project_name" value="{{ $projects->thum_project_name }}" class="form-control" required="">
                                                    @error('thum_project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>thumbnail Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="thumbnail_img" class="form-control" onChange="mainThamUrl(this)" required="">
                                                    @error('thumbnail_img')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 2nd row  -->

                                    <div class="row">
                                        <!-- start 3rd row  -->

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <h5>thumbnail Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="thum_project_title" value="{{ $projects->thum_project_title }}" class="form-control" required="">
                                                    @error('thum_project_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 4 -->

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <h5>Category <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="category_name" value="{{ $projects->category_name}}" class="form-control" required="">
                                                    @error('category_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 4 -->

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <h5>Customer name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="customer_name" value="{{ $projects->customer_name}}" class="form-control" required="">
                                                    @error('customer_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end col md 4 -->
                                    </div> <!-- end 3rd row  -->

                                    <div class="row">
                                        <!-- start 3rd row  -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Start date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="start_date"  value="{{ $projects->start_date}}" class="form-control" required="">
                                                    @error('start_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>End date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="end_date" value="{{ $projects->end_date}}" class="form-control" required="">
                                                    @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Rating <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="rating" value="{{ $projects->rating}}" class="form-control" required="">
                                                    @error('rating')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->

                                    </div> <!-- end 3rd row  -->


                                    <div class="row">
                                        <!-- start 4nd row  -->


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> details page title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="details_title" value="{{ $projects->details_title}}" class="form-control" required="">
                                                    @error('details_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>details page banner Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="details_banner" class="form-control" onChange="mainThamUrl(this)" required="">
                                                    @error('details_banner')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->

                                    </div> <!-- end 4nd row  -->

                                    <div class="row">
                                        <!-- start 5rd row  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Long Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea id="editor1" name="long_desc" rows="10" cols="80">
		                                                {{ $projects->long_desc}}
						                            </textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 12 -->
                                    </div> <!-- end 5rd row  -->

                                    <hr>
                                    <div class="row">
                                        <div class="text-lg-center">
                                            <input type="submit" class="btn btn-primary  " value="Update Project">
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
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

@endsection
