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
                        <li class="menu-item-has-children"><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('home') }}">Solar Energy</a></li>
                                <li><a href="{{ route('home.wind') }}">Wind Energy</a></li>
                                <li><a href="{{ route('home.renewable') }}">Renewable Energy</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('services.index') }}">All Services</a></li>
                                        <li><a href="{{ route('services.grid') }}">Service Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('pricing') }}">Price Plans</a></li>
                                <li><a href="{{ route('faq') }}">FAQ's</a></li>
                                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li class="menu-item-has-children"><a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('team.index') }}">Team Grid</a></li>
                                        <li><a href="{{ route('team.grid2') }}">Team Grid 2</a></li>
                                        <li><a href="{{ route('team.grid3') }}">Team Grid 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('quote') }}">Request Quote</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Projects</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Project Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('projects.grid2') }}">2 Columns</a></li>
                                        <li><a href="{{ route('projects.grid3') }}">3 Columns</a></li>
                                        <li><a href="{{ route('projects.grid4') }}">4 Columns</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog.grid2') }}">2 Columns</a></li>
                                        <li><a href="{{ route('blog.grid3') }}">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog Standard</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog.left') }}">Left Sidebar</a></li>
                                        <li><a href="{{ route('blog.full') }}">Full Width</a></li>
                                        <li><a href="{{ route('blog.right') }}">Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Contact</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('contact') }}">Contact Style 01</a></li>
                                <li><a href="{{ route('contact.alt') }}">Contact Style 02</a></li>
                            </ul>
                        </li>
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
