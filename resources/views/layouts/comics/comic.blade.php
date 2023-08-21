@extends('layouts.index')

@section('title')
    {{ $comic['series'] }} | {{ env('APP_NAME') }}
@endsection

@section('main')
    <div class="container-xl">
        <section id="comic">

            <div class="cover">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>

            <div class="description">
                <div class="comic-subtitle">{{ $comic['type'] }}</div>
                <h1>{{ $comic['series'] }}</h1>
                <p>{{ $comic['description'] }}</p>

                <button class="btn-white">find a comic shop near you</button>
                <button class="btn-white">join dc universe infinite</button>
            </div>
        </section>
    </div>
@endsection
