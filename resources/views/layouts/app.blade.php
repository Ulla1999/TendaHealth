@extends('layouts.base')
@section('body')
    @livewire('Navbar')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
