@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tendahealth</title>

        {{-- StyleSheet --}}
        <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
        {{-- Script --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>


    <body>
    @include('cookie-consent::index')
        <div class="offset-container"></div>
        <div class="contact-animation" id="confirmationAnimation"></div>

        {{-- Adding Slider --}}
        @livewire('Slider')

        {{-- Adding Partners --}}
        @livewire('Partners')

        {{-- Adding Section1 --}}
        @livewire('Section1')

        {{-- Adding Section2 --}}
        @livewire('Section2')

        {{-- Adding Section3 --}}
        @livewire('Section3')

        {{-- Adding Section4 --}}
        @livewire('Section4')

        {{-- Adding Footer --}}
        @livewire('Footer')
    </body>
@endsection
