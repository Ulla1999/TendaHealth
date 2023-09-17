@livewireScripts
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/slider.css') }}">
@endpush
<div id="slider-container">
    <div id="slider">
        <figure>
            <img src="{{ asset('assets/img/home/slide-1.jpg') }}">
            <img src="{{ asset('assets/img/home/slide-2.jpg') }}">
            <img src="{{ asset('assets/img/home/slide-3.jpg') }}">
            <img src="{{ asset('assets/img/home/slide-4.jpg') }}">
            <img src="{{ asset('assets/img/home/slide-1.jpg') }}">
        </figure>
    </div>
    <div id="slider-text">
        <p>Tendahealth offers investment, health and insurance solutions to protect
            and enhance your health and financial wellness.</p>
    </div>
    <button class="slider-button" id="openModalBtn">GET ADVICE</button>
    @livewire('advice-modal')
    <script src="assets/js/advicemodal.js"></script>
</div>
