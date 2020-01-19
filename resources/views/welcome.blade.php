@extends('layouts.app')

@section('navbar')
        <my-navbar></my-navbar>
@endsection
@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between">
            <movie-card></movie-card>
            <movie-card></movie-card>
            <movie-card></movie-card>
            <movie-card></movie-card>
            <movie-card></movie-card>
            <movie-card></movie-card>
        </div>
    </div>
    @endsection
