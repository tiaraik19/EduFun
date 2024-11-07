@extends('layout.master')

@section('content')
    <div class="" style="background-image: url(/image/Learn.jpg); height: 600px; background-size: cover; background-position: center -100px;">
    </div>
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #fff5f5a5">
        @include('component.articlecard')
    </div>
@endsection

