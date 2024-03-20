@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
<section class="lower-content">
    <div class="container">
        <ul>
            <li><img src="{{ asset('img/buy-comics-digital-comics.png') }}">digital comics</li>
            <li><img src="{{ asset('img/buy-comics-merchandise.png') }}">dc merchandise</li>
            <li><img src="{{ asset('img/buy-comics-subscriptions.png') }}">subscription</li>
            <li><img src="{{ asset('img/buy-comics-shop-locator.png') }}">comic shop locator</li>
            <li><img src="{{ asset('img/buy-dc-power-visa.svg') }}">dc power visa</li>
        </ul>
    </div>
</section>

@endsection
