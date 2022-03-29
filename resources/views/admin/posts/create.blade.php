@extends('layouts.app')

@section('main_content')
<a href="{{ route('admin.posts.index') }}" class="btn btn-big btn-outline-info mb-4">Back to Index</a>

<form action="{{ route('admin.posts.store') }}" method="POST">
	@csrf
	<div class="mb-3">
		<label for="title" class="form-label">Title</label>
		<input type="text" name="title" class="form-control" id="title">
	</div>
	<div class="mb-3">
		<label for="content" class="form-label">Content</label>
		<textarea name="content" class="form-control" id="content" rows="10"></textarea>
	</div>
	<div class="mb-3">
		<label for="image" class="form-label">Image URL</label>
		<input type="text" name="image" class="form-control" id="image" placeholder="http://placeholder.jpg">
	</div>
	<div class="row">
		<div class="col-12 d-flex justify-content-end">
			<button type="reset" class="btn btn-sm btn-outline-danger text-end me-5">Clear</button>
			<button type="submit" class="btn btn btn-outline-success text-end">Create</button>
		</div>
	</div>
</form>
@endsection