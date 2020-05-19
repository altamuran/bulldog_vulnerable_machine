@extends('layouts.app1')
@section('content')
<div class="container">
    @foreach ($posts as $p)
    <div class="row p-4">
        <section id="pinBoot">
            <article class="white-panel">
                <div class="row">
                    <div class="col-4">
                            @if ($p->image_path !="")
                            <img src="{{$p->image_path}}"  class="img-fluid" alt="Responsive image">
                            @else
                            <img src="https://image.flaticon.com/icons/svg/107/107384.svg"  class="img-fluid" alt="Responsive image">
                            @endif
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
