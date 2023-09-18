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
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Medical Insurance</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>Unity Health</li>
                            <li>Essential Med</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="medical-schemes">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Medical Schemes</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>Discovery</li>
                            <li>Bonitas</li>
                            <li>Momentum</li>
                            <li>Bestmed</li>
                            <li>Medihelp</li>
                            <li>Fedhealth</li>
                            <li>Keyhealth</li>
                            <li>Medshield</li>
                            <li>Sizwe</li>
                            <li>Profmed</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="gap-cover">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>GAP Cover</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>Discovery</li>
                            <li>MedGap</li>
                            <li>Sanlam Gap</li>
                            <li>Stratum Gap Cover</li>
                            <li>Turnberry</li>
                            <li>TRA</li>
                            <li>Sirago</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="life-and-invest">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Life and Invest</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>Brightrock</li>
                            <li>Hollard</li>
                            <li>Old Mutual</li>
                            <li>Mutual & Federal</li>
                            <li>Sanlam</li>
                            <li>Momentum</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="short-term-insurance">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Short-term Insurance</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>ABSA</li>
                            <li>Oakhurst</li>
                            <li>King Price</li>
                            <li>Hollard</li>
                            <li>Virseker</li>
                            <li>Auto & General</li>
                            <li>Zurich</li>
                            <li>Cartrack</li>
                            <li>Mutual & Federal</li>
                            <li>1st for Woman</li>
                            <li>New National</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="loyalty-programs">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Loyalty Programs</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>Vitality</li>
                            <li>Multiply</li>
                            <li>Sanlam Reality</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section4-modal" id="short-term-admin">
                <div class="section4-modal-content">
                    <div class="section4-modal-header">
                        <button class="section4-close-button"><i class="fa-regular fa-circle-xmark"
                                style="color: #fff"></i></button>
                        <h2>Short-term Administrators</h2>
                    </div>
                    <div class="section4-modal-body">
                        <ul class="section4-grid-list">
                            <li>FSP Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="assets/js/section4.js"></script>
        </div>
    </div>
</div>
