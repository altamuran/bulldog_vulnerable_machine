@extends('layouts.app1')
@section('content')
<div class="container">
    @foreach ($posts as $p)
    <div class="row p-4">
        <section id="pinBoot">
            <article class="white-panel">
                <div class="row">
                    <div class="col-4">
                            <img src="https://i.ytimg.com/vi/ONUCwXyUu9g/maxresdefault.jpg"  class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-4">
                    <h4><a href="{{ route('post',['id' => 1]) }}">{{$p->title}}</a></h4>
                        <textarea rows="3" cols="50" style=" overflow-y: hidden;" disabled>{{$p->content}}</textarea>
                    <hr>
                     <p>{{$p->autor}}</p>
                    </div>
                </div>
            </article>
           
        </section>
        <hr>
    </div>
    @endforeach
</div>
@endsection
