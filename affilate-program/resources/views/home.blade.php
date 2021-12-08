@extends('layouts.main')

@section('container')
@include('partials.header') 
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
    @foreach ($posts as $post)
    @include('partials.card')  
    @endforeach
        </div>
    </div>
</section>
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Apa Kata Mereka</h2>
            <p class="lead mb-0">Our customers love working with us</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                @include('partials.testimoni')
            </div>
        </div>
    </div>
</section>
@include('partials.contact')
    
@endsection