@extends('layout')


@section('content')
	<div class="container">
		<h3>{{ $receipe->name}}</h3>
		<li>{{ $receipe->ingredients}}</li>
		<li>{{ $receipe->category}}</li>	

		
		<a href="/receipe/{{$receipe->id}}/edit"><button class="btn-btn-success">Edit Receipe</button></a>
		
		
		<form method="post" action="/receipe/{{$receipe->id}}">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
		  
	  	  	<button type="submit" class="btn btn-primary">DELETE</button>
		</form>
	
	</div>
@endsection