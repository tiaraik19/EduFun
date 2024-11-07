@extends('layout.master')
@section('content')
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #fff5f5a5">
        <h3>{{$category->name}}</h3>
        {{-- ikutin nama function relation di model --}}
        @include('component.articlecard', ['article'=> $category->articles])
    </div>
@endsection

