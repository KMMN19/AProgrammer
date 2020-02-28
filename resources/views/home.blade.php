@extends('layout')


@section('content')
	<h2>Home Page</h2>
	@foreach($data as $receipe)
		<li>Name -{{$receipe->name}}</li>
		<li>ingredients -{{$receipe->ingredients}}</li>
		<li>category -{{$receipe->category}}</li>
		<hr>
	@endforeach
@endsection