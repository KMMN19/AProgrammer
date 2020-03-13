ode Issues 0 Pull requests 0 Actions Projects 0 Wiki Security Insights
aprogrammer_laravel/resources/views/home.blade.php
@HlaingTinHtun HlaingTinHtun end of week5
1732c37 on Jan 1
38 lines (29 sloc)  944 Bytes
  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <h2>Home Page</h2>
                        <div>
                            <a href="/receipe/create"><button class="btn btn-success">Create</button></a>
                        </div>

                        @foreach($data as $receipe)
                            <a href="/receipe/{{$receipe->id}}"><li>Name- {{$receipe->name}}</li></a>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection