@extends('layouts.app1')
@section('content')

<div class="w3-container">
    @foreach ($post as $p)
    <div class="well"> 
        <div class="row">
            <div class="col-md-12  m-4">
                <div class="row m-2">
                    <h1 class="text-center">{{$p->title}}</h1>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <hr>
                        <small><strong>{{$p->autor}}</strong></small>
                        <hr>
                        <p class="text-justify">
                            {{$p->content}}
                        </p>
                    </div>
                    <div class=" col-md-3 m-4">
                        <div class="container-fluid">
                            <img src="https://i.ytimg.com/vi/ONUCwXyUu9g/maxresdefault.jpg"  class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection