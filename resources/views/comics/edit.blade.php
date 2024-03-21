@extends('layouts.main')

@section('title', 'Modifica comic')

@section('main-content')

<section id="comics-list" class="upper-content">
    <div class="container">
        <a class="create-btn ms-3" href="{{ route('comics.index')}}">Torna indietro</a>
        @if ($errors->any())
        <div class="alert alert-danger mt-5">
            <h4>Some fields are invalid</h4>
            <ul class="ms-3">
                @foreach ($errors->all() as $error)
                <li class="ms-3">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="container create-comic-container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="title" class="form-label">
                            <h2 class="text-white">Inserisci il titolo</h2>
                        </label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Es.: Action Comics #1000: The Deluxe Edition" value="{{old('title', $comic->title)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="series" class="form-label">
                            <h2 class="text-white">Inserisci la serie</h2>
                        </label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Es.: Action Comics" value="{{old('series', $comic->series)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="type" class="form-label">
                            <h2 class="text-white">Inserisci la tipologia di fumetto</h2>
                        </label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Es.: Comic Book" value="{{old('type', $comic->type)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="artists" class="form-label">
                            <h2 class="text-white">Inserisci gli artisti</h2>
                        </label>
                        <input type="text" name="artists" class="form-control" id="artists" value="{{old('artists', $comic->artists)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="writers" class="form-label">
                            <h2 class="text-white">Inserisci gli scrittori</h2>
                        </label>
                        <input type="text" name="writers" class="form-control" id="writers" value="{{old('writers', $comic->writers)}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-3 text-center">
                        <label for="sale_date" class="form-label">
                            <h2 class="text-white">Inserisci la data di pubblicazione</h2>
                        </label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="YYYY/MM/DD" value="{{old('sale_date', $comic->sale_date)}}">
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="mt-3 text-center">
                        <label for="price" class="form-label">
                            <h2 class="text-white">Inserisci il prezzo</h2>
                        </label>
                        <input type="text" name="price" class="form-control" id="price" value="{{old('price', $comic->price)}}">
                    </div>
                </div>
                <div class="col-9">
                    <div class="mt-3 text-center">
                        <label for="thumb" class="form-label">
                            <h2 class="text-white">Inserisci l'immagine</h2>
                        </label>
                        <input type="url" name="thumb" class="form-control" id="thumb" placeholder="Es.: https://..." value="{{old('thumb', $comic->thumb)}}">
                    </div>
                </div>
                <div class="col">
                    <div class="mt-3 text-center">
                        <label for="description" class="form-label">
                            <h2 class="text-white">Inserisci la descrizione</h2>
                        </label>
                        <textarea type="url" name="description" class="form-control" id="description" rows="3">{{old('description', $comic->description)}}</textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center pt-5 gap-4">
                <button class="create-btn" type="reset">Svuota tutti i campi</button>
                <button class="create-btn" type="submit">Aggiungi il fumetto</button>
            </div>
        </form>
    </div>
</section>

@endsection
