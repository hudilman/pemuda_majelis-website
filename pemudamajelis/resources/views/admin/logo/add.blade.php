@extends('admin.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				
				<form role="form" enctype="multipart/form-data" method="post" action="{{ url('admin/logo/add') }}">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="name" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="image" id="exampleInputFile">
						</div>
                        <div class="form-group">
							<label for="exampleInputEmail1">Tanggal</label>
							<input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Url">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection