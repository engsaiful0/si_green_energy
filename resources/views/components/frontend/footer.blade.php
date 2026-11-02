<!-- Footer Area Start -->
<div class="footer__area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="footer__area-widget">
                    <div class="footer__area-widget-logo mb-30">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo-2.png') }}" alt="{{ config('app.name') }}">
                        </a>
                    </div>
                    <p>{{ $footerDescription ?? 'The insurance company assumes the financial risk of covering these events in exchange for the premiums paid by the policyholder.' }}</p>
                    <div class="footer__area-widget-info mb-20">
                        <p><a href="mailto:{{ $footerEmail ?? 'help@gmail.com' }}">{{ $footerEmail ?? 'help@gmail.com' }}</a></p>
                    </div>
                    <div class="footer__area-widget-info">
                        <p>{{ $footerAddress ?? '256 Elizaberth Ave Str, Nabraska, USA' }}</p>
                    </div>
                    <div class="footer__area-widget-social social__icon mt-20">
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
            </div>
            <div class="col-lg-5 col-md-7">
                <div class="row">
                    <div class="col-sm-6 col-12 sm-mb-30">
                        <div class="footer__area-widget">
                            <h6>Phone</h6>
                            <div class="footer__area-widget-info mb-35">
                                <p><a href="tel:{{ $phone1 ?? '+12(456)65878' }}">{{ $phone1 ?? '+12(456)658 78' }}</a></p>
                                <p><a href="tel:{{ $phone2 ?? '+12(518)45145' }}">{{ $phone2 ?? '+12(518)451 45' }}</a></p>
                            </div>
                            <h6>Email</h6>
                            <div class="footer__area-widget-info">
                                <p><a href="mailto:{{ $contactEmail ?? 'hello.help@gmail.com' }}">{{ $contactEmail ?? 'hello.help@gmail.com' }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 sm-mb-30">
                        <div class="footer__area-widget">
                            <h6>Resources</h6>
                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 lg-mb-30">
                <div class="footer__area-widget">
                    <h6>Subscribe</h6>
                    <div class="footer__area-widget-subscribe">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address" required="required">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            <label><input type="checkbox" name="terms" required> I agree with the terms and conditions</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__area lg-t-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Copyright {{ date('Y') }} - All Rights Reserved By <a href="{{ route('home') }}">{{ config('app.name', 'SI Green Energy') }}</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="copyright__area-menu t-right lg-t-center lg-mt-5">
                        <ul>
                            <li><a href="{{ route('privacy') }}">Privacy & Policy</a></li>
                            <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
