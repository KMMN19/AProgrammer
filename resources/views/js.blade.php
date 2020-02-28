@extends('layout')

@section('content')
	<h3>JS Page</h3>
	@foreach($data as $fruit)
		<li>{{$fruit}}</li>
	@endforeach
@endsection