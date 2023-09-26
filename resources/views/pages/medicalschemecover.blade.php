@extends('layouts.app')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Medical Scheme Cover | Tendahealth</title>
        {{-- StyleSheet --}}
        <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
        @livewireStyles
        @livewireScripts
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="offset-container"></div>
        @livewire('Section11')
        @livewire('Section12')
        @livewire('GetAdvice')
        @livewire('Footer')
    </body>
@endsection
