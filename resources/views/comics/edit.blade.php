@extends('layouts.main')

@section('title', 'Modifica comic')

@section('main-content')

<section id="comics-list" class="upper-content">
    {{-- ALERT --}}
    @include('includes.alert')

    {{-- FORM --}}
    @include('includes.comics.form')
</section>

@endsection
