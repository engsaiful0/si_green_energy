<!-- Hamburger Start -->
<div class="header__area-menubar-right-sidebar-popup">
    <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
    <div class="header__area-menubar-right-sidebar-popup-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo-2.png') }}" alt="{{ config('app.name') }}">
        </a>
    </div>
    <p>{{ $sidebarDescription ?? 'The insurance company assumes the financial risk of covering these events in exchange for the premiums paid by the policyholder. There are many different types of insurance,' }}</p>
    <div class="header__area-menubar-right-sidebar-popup-contact">
        <h4 class="mb-30">Get In Touch</h4>
        <div class="header__area-menubar-right-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                <i class="fal fa-phone-alt icon-animation"></i>
            </div>
            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                <span>Call Now</span>
                <h6><a href="tel:{{ $phone1 ?? '+125(895)658568' }}">{{ $phone1 ?? '+125 (895) 658 568' }}</a></h6>
            </div>
        </div>
        <div class="header__area-menubar-right-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                <i class="fal fa-envelope"></i>
            </div>
            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                <span>Quick Email</span>
                <h6><a href="mailto:{{ $sidebarEmail ?? 'info.help@gmail.com' }}">{{ $sidebarEmail ?? 'info.help@gmail.com' }}</a></h6>
            </div>
        </div>
        <div class="header__area-menubar-right-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                <i class="fal fa-map-marker-alt"></i>
            </div>
            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                <span>Office Address</span>
                <h6><a href="{{ $officeMapLink ?? 'https://google.com/maps' }}" target="_blank">{{ $officeAddress ?? 'PV3M+X68 Welshpool United Kingdom' }}</a></h6>
            </div>
        </div>
    </div>
    <div class="header__area-menubar-right-sidebar-popup-social social__icon">
        <ul>
            @if(!empty($facebookUrl))
            <li><a href="{{ $facebookUrl }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            @endif
            @if(!empty($twitterUrl))
            <li><a href="{{ $twitterUrl }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            @endif
            @if(!empty($behanceUrl))
            <li><a href="{{ $behanceUrl }}" target="_blank"><i class="fab fa-behance"></i></a></li>
            @endif
            @if(!empty($linkedinUrl))
            <li><a href="{{ $linkedinUrl }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            @endif
        </ul>
    </div>
</div>
<div class="sidebar-overlay"></div>
<!-- Hamburger End -->
