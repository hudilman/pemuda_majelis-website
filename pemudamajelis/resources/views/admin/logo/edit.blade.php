@extends('admin.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				
				<form role="form" enctype="multipart/form-data" method="post" action="">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="name" name="title" class="form-control" id="exampleInputEmail1" value="{{ $lg->title }}" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="image" id="exampleInputFile" value="{{ $lg->logo }}">
						</div>
                        <div class="form-group">
							<label for="exampleInputEmail1">Url</label>
							<input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Url" value="{{ $lg->url }}">
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