@extends('layout.master')
@section('content')
    <div class="container-fluid p-5 d-flex flex-column align-items-center" >
        <h3>Popular</h3>
        @include('component.articlecard', ['article' => $article])
        <div class="d-flex justify-content-center pt-3">
            {{$article->links()}}
        </div>
    </div>
@endsection


