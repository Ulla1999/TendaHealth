@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us | Tendahealth</title>
        {{-- StyleSheet --}}
        <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
        @livewireStyles
        @livewireScripts
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="offset-container"></div>
        @livewire('Section32')
        @livewire('Section31')
        @livewire('Partners')
        @livewire('Footer')
    </body>
@endsection
