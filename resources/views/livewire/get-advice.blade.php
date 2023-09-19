@livewireScripts
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/getadvice.css') }}">
@endpush
<div class="getting-advice">
    <div class="advice-text">
        <p>Tendahealth offers investment, health and insurance solutions to protect and enhance your health and financial wellness.</p>
    </div>
    <button class="advice-button" id="openModalBtn">GET ADVICE</button>
    @livewire('advice-modal')
    <script src="assets/js/advicemodal.js"></script>
</div>
