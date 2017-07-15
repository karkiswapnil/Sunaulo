@extends('admin_view.starter')
@section('title')
Add New Category
@endsection

@section('main_header')
Add New Category
@endsection

@section('destination')
Add Category
@endsection


@section('content')
	<link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Created At</th>
			<th>Actions</th>
		</tr>

		@foreach ($categories as $category)
		<tr>
			<th>{{$category->id}}</th>
			<td>{{$category->title}}</td>
			<td>{{date('F d, Y', strtotime($category->created_at))}}</td>
			<td><a href='{{route('content.edit',$category->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['content.destroy',$category->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection