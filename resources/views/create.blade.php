@extends('layout')

@section('content')
	
	<div class="container">
		<h2> Create New Receipe</h2>

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

		<form method="post" action="/receipe">
			
			{{ csrf_field() }}
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" name="name" class="form-control"  value=" {{ old('name') }} ">
		  </div>

		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" name="ingredients" class="form-control" value=" {{ old('ingredients') }} ">
		  </div>

		  <div class="form-group">
		    <label>Category</label>
		    <input type="text" name="category" class="form-control"  value=" {{ old('category') }} ">
		  </div>

	  	  <button type="submit" class="btn btn-primary">Submit</button>
	  	  
		</form>
	</div>
@endsection