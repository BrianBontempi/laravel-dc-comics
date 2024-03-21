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
    @endif
</div>
