<!-- Header Area Start -->
<div class="header__area">
    <div class="custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left one">
                <div class="header__area-menubar-left-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/slaze/img/logo-1.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </div>
            </div>
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu">
                    <ul id="mobilemenu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('services.index') }}">Services</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-search">
                    <div class="search">
                        <span class="header__area-menubar-right-search-icon open"><i class="fal fa-search"></i></span>
                    </div>
                </div>
                <div class="header__area-menubar-right-sidebar">
                    <div class="header__area-menubar-right-sidebar-popup-icon"><i class="flaticon-menu-2"></i></div>
                </div>
                <div class="header__area-menubar-right-btn">
                    <a class="btn-one" href="{{ route('quote') }}">Talk with us</a>
                </div>
                <div class="header__area-menubar-right-responsive-menu menu__bar">
                    <i class="flaticon-menu-2"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->
