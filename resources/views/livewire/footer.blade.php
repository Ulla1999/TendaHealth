@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/footer.css') }}">
@endpush
<div>
    <div class="footer">
        <div class="footer-item">
            <h1>ABOUT US</h1>
            <p>Tendahealth, a subsidiary of the Afrocentric Group is an authorised financial services provider.
                Tendahealth
                is authorised to provide financial advice in respect of the corresponding categories of financial
                products.
            </p>
        </div>
        <div class="footer-item">
            <h1>QUICK LINKS</h1>
            <a href="{{ route('about') }}"><i class="fa-solid fa-chevron-right"></i> ABOUT US</a>
            <a href="{{ route('services') }}"><i class="fa-solid fa-chevron-right"></i> SERVICES</a>
            <a href="{{ route('medical-scheme-cover') }}"><i class="fa-solid fa-chevron-right"></i> MEDICAL SCHEME
                COVER</a>
            <a href="{{ route('gap-cover') }}"><i class="fa-solid fa-chevron-right"></i> GAP COVER</a>
            <a href="{{ route('short-term-insurance') }}"><i class="fa-solid fa-chevron-right"></i> SHORT TERM
                INSURANCE</a>
            <a href="{{ route('investments') }}"><i class="fa-solid fa-chevron-right"></i> INVESTMENTS</a>
            <a href="{{ asset('assets/pdf/TendaHealth_Digital.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> TENDAHEALTH BROCHURE</a>
        </div>
        <div class="footer-item">
            <h1>COMPLIANCE</h1>
            <a href="{{ asset('assets/pdf/2021_Conflict_of_Interest_policyV2_final.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> CONFLICT OF INTEREST</a>
            <a href="{{ asset('assets/pdf/2021_Tendahealth_PAIA_Policy.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> PAIA POLICY</a>
            <a href="{{ asset('assets/pdf/2021_Treating_customers_fairly_policy.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> TCF POLICY</a>
            <a href="{{ asset('assets/pdf/Complaints_Management_Framework.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> COMPLAINTS MANAGEMENT</a>
            <a href="{{ asset('assets/pdf/Privacy_statement_POPIA.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> PRIVACY STATEMENT</a>
            <a href="{{ asset('assets/pdf/Website-Disclaimer-Template.pdf') }}" target="_blank"><i
                    class="fa-solid fa-chevron-right"></i> DISCLAIMER</a>
            <div style="margin-bottom: 20px;"></div>
            <div class="footer-license">FSP License No. 44680</div>
            <div class="footer-license">CMS accreditation number ORG4268</div>
        </div>
        <div class="footer-item">
            <h1>CONTACT US</h1>
            <a>TENDA HEALTH</a>
            <div class="footer-numbers"><i class="fas fa-phone" style="color: #ffffff;"></i> : +27 11 049 8601</div>
            <a>COMPLAINTS</a>
            <div class="footer-numbers"><i class="fas fa-phone" style="color: #ffffff;"></i> : +27 11 049 8601</div>
            <a>COMPLIANCE</a>
            <div class="footer-numbers"><i class="fas fa-phone" style="color: #ffffff;"></i> : +27 12 424 3400</div>
        </div>
    </div>
    <div class="foot-footer">

        <p><i class="fa-regular fa-copyright" style="color: #ffffff;"></i> 2022 Tendahealth (Authorised Financial
            services provider (FSP number 44680) CMS Accredited (ORG4268) | All
            Rights Reserved.</p>
        <div class="footer-logo">
            <span>Designed and developed by <a href="https://www.redcactus.co.za/" target="_blank" style="color: #2bb673; font-weight: bold">Red Cactus</a></span>
        </div>
    </div>
</div>
