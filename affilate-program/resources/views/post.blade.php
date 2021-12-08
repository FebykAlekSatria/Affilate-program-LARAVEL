@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            @include('partials.article')
        </div>
    </div>
</div>
{{-- <div class="container">
    <h1>{{$post['title']}}</h1>
</div> --}}

@endsection