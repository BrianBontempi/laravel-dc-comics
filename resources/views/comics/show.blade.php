@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')
<section id="product-description" class="container">
    <div class="wrapper container">
        <div class="card-container">
            <div class="comics-card">
                <img class="comic-image" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="details">
                <div class="info-comics">
                    <h1> {{ $comic->title}} </h1>
                    <p class="description">{{$comic->description}}</p>
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
            <div class="display-flex">
                <div class="row">
                    <div class="col">
                        <p>Art by:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                @foreach (explode(', ', $comic->artists) as $artist)
                                <a href="#">
                                    {{ $artist }}
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
                                @foreach (explode(', ', $comic->writers) as $writer)
                                <a href="#">
                                    {{ $writer }}
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
            <div class="display-flex">
                <div class="row">
                    <div class="col">
                        <p>Series:</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <a class="uppercase" href="#">
                                    {{ $comic->series }}
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
                                <p>{{ $comic->price }}</p>
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
                                <p>{{ $comic->sale_date }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
