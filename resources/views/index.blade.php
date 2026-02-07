<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.layout')

    @section('head')
        <title>Главная страница</title>
    @endsection
</head>
<body>
@section('content')
    <div class="content">
        <div class="head">Новинки компании</div>
        
        <div id="slider">
            <div class="slides">
                <div class="slide col">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="product" />
                    <h3><a href="#">Товар</a></h3>
                </div>
                <div class="slide col">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="product" />
                    <h3><a href="#">Товар</a></h3>
                </div>
                <div class="slide col">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="product" />
                    <h3><a href="#">Товар</a></h3>
                </div>
                <div class="slide col">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="product" />
                    <h3><a href="#">Товар</a></h3>
                </div>
                <div class="slide col">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="product" />
                    <h3><a href="#">Товар</a></h3>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>