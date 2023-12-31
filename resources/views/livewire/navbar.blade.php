@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endpush

<div class="nav-container">
    <div class="nav-container-contact">
        <div class="items">
            <span class="nav-container-phone-desktop">
                <i class="fas fa-phone" style="color: #ffffff;"></i>
                <span>+27 11 049 8601</span>
            </span>
            <span class="nav-container-phone-mobile">
                <span><a href='tel:+27 11 049 8601'>+27 11 049 8601</a></span>
            </span>
            <span class="nav-container-email-desktop">
                <i class="fas fa-envelope" style="color: #ffffff;"></i>
                <span><a href='mailto:enquiries@tendaonline.co.za'>enquiries@tendaonline.co.za</a></span>
            </span>
            <span class="nav-container-email-mobile">
                <span><a href='mailto:enquiries@tendaonline.co.za'>enquiries@tendaonline.co.za</a></span>
            </span>
        </div>
    </div>
    <header>
        <div class="logo" onclick="window.location.href='{{ route('home') }}';"><img
                src="{{ asset('assets/img/Tendahealth_new-logo.png') }}" alt="Tendahealth Logo"></div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav id="NavBar">
            <ul class="desktop-nav">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About
                        Us</a></li>
                <li><a href="{{ route('services') }}"
                        class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li class="dropdown">
                    <a href="#"
                        class="{{ request()->routeIs('products') ||
                        request()->routeIs('medical-scheme-cover') ||
                        request()->routeIs('bonitas') ||
                        request()->routeIs('gap-cover') ||
                        request()->routeIs('medgap') ||
                        request()->routeIs('essentialmed') ||
                        request()->routeIs('sanlam') ||
                        request()->routeIs('short-term-insurance') ||
                        request()->routeIs('investments')
                            ? 'active'
                            : '' }}">
                        Our Products <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <button class="dropdown-item" style="background-color: #4d9947">
                            <div class="dropdown-item-text">
                                MEDICAL SCHEME COVER
                                <a href="{{ route('bonitas') }}">
                                    <img style="height: 2.5vw; margin-bottom: 2vw; margin-left: 3vw; padding: 2px;" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/bonitas_logo.png') }}">
                                </a>
                            </div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/medicalschemecover.png') }}">
                            </div>
                        </button>
                        <button class="dropdown-item" style="background-color: #ffbb00">
                            <div class="dropdown-item-text">PRIMARY HEALTH
                                <a href="{{ route('bonitas') }}">
                                    <img style="height: 2.5vw; margin-bottom: 2vw; margin-left: -1vw; padding: 2px;" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/essentialmed_logo.png') }}">
                                </a></div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/primaryhealth.png') }}">
                            </div>
                        </button>
                        <button class="dropdown-item" style="background-color: #ec1d25">
                            <div class="dropdown-item-text">
                                LIFE INSURANCE
                                <a href="{{ route('sanlam') }}">
                                    <img style="margin-bottom: 2.5vw; margin-left: -1vw; margin-right: 10px;" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/sanlam_indie_logo.png') }}">
                                </a>
                            </div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/lifeinsurance.png') }}">
                            </div>
                        </button>
                        <button class="dropdown-item" style="background-color: #2ab474">
                            <div class="dropdown-item-text">INVESMENTS</div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/investments.png') }}">
                            </div>
                        </button>
                        <button class="dropdown-item" style="background-color: #6a3341">
                            <div class="dropdown-item-text">SHORT TERM INSURANCE
                                <a href="{{ route('sanlam') }}">
                                    <img style="height:auto;width:7vw;margin-left:3vw" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/miway_logo.png') }}">
                                </a>
                                <a href="{{ route('sanlam') }}">
                                    <img style="height:auto;width:7vw;padding:2px;margin-left:3vw" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/santam_logo.png') }}">
                                </a></div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/shortterminsurance.png') }}">
                            </div>
                        </button>
                        <button class="dropdown-item" style="background-color: #ec145a">
                            <div class="dropdown-item-text">GAP COVER
                                <a href="{{ route('medgap') }}">
                                    <img style="height:auto;width:7vw;margin-left:3vw" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/medgap_logo.png') }}">
                                </a>
                                <a href="{{ route('sanlam') }}">
                                    <img style="height:auto;width:7vw;padding:2px;margin-left:3vw" class="dropdown-item-logo"
                                        src="{{ asset('assets/img/navbar/sanlam_gap_logo.png') }}">
                                </a>
                            </div>
                            <div class="dropdown-item-iconbox">
                                <img src="{{ asset('assets/img/navbar/gapcover.png') }}">
                            </div>
                        </button>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact
                        Us</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
</div>
