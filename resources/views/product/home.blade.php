@extends('layouts.site')

@section('main')
    <div id="carusel">
        <h1>Популярные товары</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/carusel/Carusel1.jpg') }}" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/carusel/Carusel2.jpg') }}" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/carusel/Carusel3.jpg') }}" class="d-block w-100" alt="Image">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="famous_brands">
        @php
            $brands = \App\Models\Brand::all();
        @endphp
        @foreach($brands as $brand)
            <img src="{{ asset($brand->img) }}" alt="Image">
        @endforeach
    </div>
@endsection
