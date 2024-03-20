@extends('layouts.main')

@section('title', 'dettaglio prodotto')

@section('main-content')
<section id="product-description" class="container">
    <div class="wrapper container">
        <div class="card-container">
            <div class="comics-card">
                <img class="comic-image" src="{{ $show['thumb'] }}" alt="{{ $show['title'] }}">
            </div>
        </div>
        <div class="details">
            <div class="info-comics">
                <h1> {{ $show['title']}} </h1>
                <p class="description">{{$show['description']}}</p>
            </div>
            <div class="banner-adv">
                <img class="adv" src="{{ asset('img/adv.jpg') }}">
            </div>
        </div>
    </div>
</section>
<section id="info-section">
    <div class="wrapper container">
        <div class="talent container">
            <h1>Talent</h1>
            <div class="d-flex">
                <div class="row">
                    <div class="col">
                        <p>Art by:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                @foreach ($show['artists'] as $s)
                                <a href="#">
                                    {{ $s }}
                                </a>
                                @if (!$loop->last)
                                ,
                                @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Written by:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                @foreach ($show['writers'] as $s)
                                <a href="#">
                                    {{ $s }}
                                </a>
                                @if (!$loop->last)
                                ,
                                @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="specs container">
            <h1>Specs</h1>
            <div class="d-flex">
                <div class="row">
                    <div class="col">
                        <p>Series:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <a class="uppercase" href="#">
                                    {{$show['series'] }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>U.S. Price:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <p>{{$show['price'] }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>On Sale Date:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <p>{{$show['sale_date'] }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
