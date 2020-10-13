@extends('layouts.copy_app')
@section('breadcrumbs')
	<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categories</a></li>
	<li class="breadcrumb-item active" aria-current="page">Add/Edit Category</li>
@endsection
@section('content')

<form method="post" action="@if(isset($category)) {{route('admin.category.update', $category)}} @else {{route('admin.category.store')}} @endif" accept-charset="utf-8">
    @csrf 
    @if(isset($category))
		@method('PUT')
	@endif
    	<div class="form-group row">
		<div class="col-sm-12">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	<div class="col-sm-12">
			@if (session()->has('message'))
			<div class="alert alert-success">
				{{session('message')}}
			</div>
			@endif
		</div>
    <div class="form-group-row">
    <div class="col-md-12">
    <label class="form-control-label">Title</label>
    <input id="txturl" class="form-control" type="text" name="title" value="{{@$category->title}}">
    <p class="small">{{config('app.url')}}<span id="url">{{@$category->slug}}</span></p>
			<input type="hidden" name="slug" id="slug" value="{{@$category->slug}}">
    
    </div>
</div>
    <div class="form-group-row">
    <div class="col-md-12">
    <label class="form-control-label">Description: </label>
        <textarea id="editor" class="form-control" name="description" rows="10" cols="80" >{!! @$category->description !!}</textarea>
 
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-12">
			@if(isset($category))
			<input type="submit" name="submit" class="btn btn-primary" value="Edit Category" />
			@else
     <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
     @endif
    </div>
    </div>

</form>
@endsection
@section('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
$(function(){
	CKEDITOR.replace( 'editor' );
	$('#txturl').on('keyup', function(){
		var url = slugify($(this).val());
		$('#url').html(url);
		$('#slug').val(url);
	})
	$('#parent_id').select2({
		placeholder: "Select a Parent Category",
		allowClear: true,
		minimumResultsForSearch: Infinity
	});

})
</script>
@endsection