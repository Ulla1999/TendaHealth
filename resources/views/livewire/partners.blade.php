@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/partners.css') }}">
@endpush

<div class="partner">
    <div class="partner-container">
        <div class="partner-item">
            <div>
                <div class="partner-main-text">
                    <h1>OUR PARTNERS</h1>
                </div>
                <div class="partner-sub-text">
                    <p>Click the logos to view more</p>
                </div>
            </div>
        </div>
        <a href="{{ route('bonitas') }}" class="partner-item"><img
                src="{{ asset('assets/img/home/Bonitas-Logo.png') }}"></a>
        <a href="{{ route('sanlam') }}" class="partner-item"><img
                src="{{ asset('assets/img/home/Sanlam-Logo.png') }}"></a>
        <a href="{{ route('medgap') }}" class="partner-item"><img
                src="{{ asset('assets/img/home/Medgap-Logo.png') }}"></a>
        <a href="{{ route('essentialmed') }}" class="partner-item"><img
                src="{{ asset('assets/img/home/EssMed-Logo.png') }}"></a>
    </div>
</div>
