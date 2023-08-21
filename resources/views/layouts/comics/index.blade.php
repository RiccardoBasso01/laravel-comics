@extends('layouts.index')

@section('title')
    Comics | {{ env('APP_NAME') }}
@endsection

@section('main')
    @include('layouts.comics.main')
@endsection
