@extends('layout.master')
@section('content')
    <div class="container-fluid d-flex flex-column align-items-center px-5 py-3" style="background-color: #fff5f5a5">
        <img src="{{ asset('image/'.$article->picture) }}" alt="" style="width: 100%; height:500px; border-radius: 20px">
        <div class="d-flex flex-column align-items-start px-3">
            <p class="date">{{$article->created_at->format('Y-m-d')}} | by: {{$article->author->name}}</p>
            <p class="pb-4">{!! nl2br(e($article->description)) !!}</p>
        </div>
    </div>
@endsection