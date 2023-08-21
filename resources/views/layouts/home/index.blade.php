@extends('layouts.index')

@section('title')
    {{ env('APP_NAME') }} - The Official Home of DC
@endsection

@section('main')
    @include('layouts.home.main')
@endsection
