@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
		<h1>EDIT Image</h1>
		<img src="/{{$imageInView->image}}" class="img-thumbnail gallery-image" alt="">
		<form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
			<div class="form-control">
				<input type="file" name="image">
			</div>
			<button type="submit" class="btn btn-warning">Edit</button>
		</form>
		</div>
	</div>
</div>
@endsection
