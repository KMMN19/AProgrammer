@extends('layout')


@section('content')
	<div class="container">
		<h2>All List Receipe</h2>
		<div>
			<a href="/receipe/create"><button class="btn-btn-success">Create</button></a>
		</div>

		@foreach($data as $receipe)
			<a href="/receipe/{{$receipe->id}}"><li>Name- {{$receipe->name}}</li></a>
			<li>ingredients -{{$receipe->ingredients}}</li>
			<li>category -{{$receipe->category}}</li>
			<hr>
		@endforeach
	</div>
	
@endsection