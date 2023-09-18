@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/section2.css') }}">
@endpush
<div class="section2">
    <a href="{{ route('medical-scheme-cover') }}" class="section2-item" alt="img 2-1">
        <img src="{{ asset('assets/img/home/section2-1.jpg') }}">
        <h1>Medical Scheme Cover</h1>
    </a>
    <a href="{{ route('gap-cover') }}" class="section2-item" alt="img 2-2">
        <img src="{{ asset('assets/img/home/section2-2.jpg') }}">
        <h1>GAP cover</h1>
    </a>
    <a href="{{ route('short-term-insurance') }}" class="section2-item" alt="img 2-3">
        <img src="{{ asset('assets/img/home/section2-3.jpg') }}">
        <h1>Short-term Insurance</h1>
    </a>
    <a href="{{ route('investments') }}" class="section2-item" alt="img 2-4">
        <img src="{{ asset('assets/img/home/section2-4.jpg') }}">
        <h1>Investments</h1>
    </a>
</div>
