@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/section4.css') }}">
@endpush
<div class="section4">
    <div class="section4-block">
        <div class="section4-title">
            <h1>Our Contacts</h1>
        </div>
        <div class="section4-contacts">
            <button class="section4-item" data-modal="medical-insurance">Medical Insurance</button>
            <button class="section4-item" data-modal="medical-schemes">Medical Schemes</button>
            <button class="section4-item" data-modal="gap-cover">GAP Cover</button>
            <button class="section4-item" data-modal="life-and-invest">Life and Invest</button>
            <button class="section4-item" data-modal="short-term-insurance">Short-term Insurance</button>
            <button class="section4-item" data-modal="loyalty-programs">Loyalty Programs</button>
            <button class="section4-item" data-modal="short-term-admin">Short-term Administrators</button>

            {{-- Modals --}}
            <div class="section4-modal" id="medical-insurance">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Medical Insurance modal -->
                    <h2>Medical Insurance</h2>
                    <p>This is the content for the Medical Insurance modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="medical-schemes">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Medical Schemes modal -->
                    <h2>Medical Schemes</h2>
                    <p>This is the content for the Medical Schemes modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="gap-cover">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for GAP Cover modal -->
                    <h2>GAP Cover</h2>
                    <p>This is the content for the GAP Cover modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="life-and-invest">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Life and Invest modal -->
                    <h2>Life and Invest</h2>
                    <p>This is the content for the Life and Invest modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="short-term-insurance">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Short-term Insurance modal -->
                    <h2>Short-term Insurance</h2>
                    <p>This is the content for the Short-term Insurance modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="loyalty-programs">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Loyalty Programs modal -->
                    <h2>Loyalty Programs</h2>
                    <p>This is the content for the Loyalty Programs modal.</p>
                </div>
            </div>
            <div class="section4-modal" id="short-term-admin">
                <div class="modal-content">
                    <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"></i></button>
                    <!-- Content for Short-term Administrators modal -->
                    <h2>Short-term Administrators</h2>
                    <p>This is the content for the Short-term Administrators modal.</p>
                </div>
            </div>
            <script src="assets/js/section4.js"></script>
        </div>
    </div>
</div>
