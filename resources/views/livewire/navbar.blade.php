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
        <div class="logo" onclick="window.location.href='{{ route('home') }}';"><img src="{{ asset('assets/img/Tendahealth_new-logo.png') }}" alt="Tendahealth Logo"></div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav id="NavBar">
            <ul class="desktop-nav">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
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
                        <li class="dropdown-transparent">
                        </li>
                        <li class="dropdown-column">
                            <a href="{{ route('medical-scheme-cover') }}"
                                class="{{ request()->routeIs('medical-scheme-cover') || request()->routeIs('bonitas')? 'active' : '' }}">Medical scheme
                                cover</a>
                            <a href="{{ route('bonitas') }}"
                                class="{{ request()->routeIs('bonitas') ? 'active' : '' }}">- Bonitas</a>
                        </li>
                        <li class="dropdown-column">
                            <a href="{{ route('gap-cover') }}"
                                class="{{ request()->routeIs('gap-cover') || request()->routeIs('medgap') || request()->routeIs('essentialmed') || request()->routeIs('sanlam')? 'active' : '' }}">GAP cover</a>
                            <a href="{{ route('medgap') }}"
                                class="{{ request()->routeIs('medgap') ? 'active' : '' }}">- Medgap</a>
                            <a href="{{ route('essentialmed') }}"
                                class="{{ request()->routeIs('essentialmed') ? 'active' : '' }}">- EssentialMED</a>
                            <a href="{{ route('sanlam') }}"
                                class="{{ request()->routeIs('sanlam') ? 'active' : '' }}">- Sanlam</a>
                        </li>
                        <li class="dropdown-column">
                            <a href="{{ route('short-term-insurance') }}"
                                class="{{ request()->routeIs('short-term-insurance') ? 'active' : '' }}">Short-term-insurance</a>
                        </li>
                        <li class="dropdown-column">
                            <a href="{{ route('investments') }}"
                                class="{{ request()->routeIs('investments') ? 'active' : '' }}">Investments</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
            <ul class="mobile-nav">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="#"
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
                        Our Products </a>
                    <ul>
                        <li><a href="{{ route('medical-scheme-cover') }}" class="{{ request()->routeIs('medical-scheme-cover') ? 'active' : '' }}">Medical scheme cover</a>
                            <ul>
                                <li><a href="{{ route('bonitas') }}" class="{{ request()->routeIs('bonitas') ? 'active' : '' }}">Bonitas</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('gap-cover') }}" class="{{ request()->routeIs('gap-cover') ? 'active' : '' }}">GAP cover</a>
                            <ul>
                                <li><a href="{{ route('medgap') }}" class="{{ request()->routeIs('medgap') ? 'active' : '' }}">Medgap</a>
                                    <ul>
                                        <li><a href="{{ route('essentialmed') }}" class="{{ request()->routeIs('essentialmed') ? 'active' : '' }}">EssentialMED</a></li>
                                        <li><a href="{{ route('sanlam') }}" class="{{ request()->routeIs('sanlam') ? 'active' : '' }}">Sanlam</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('short-term-insurance') }}" class="{{ request()->routeIs('short-term-insurance') ? 'active' : '' }}">Short-term-insurance</a></li>
                        <li><a href="{{ route('investments') }}" class="{{ request()->routeIs('investments') ? 'active' : '' }}">Investments</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
</div>
