<!-- Top Bar Area Start -->
<div class="topBar__one">
    <div class="custom__container">
        <div class="row al-center">
            <div class="col-lg-8">
                <div class="topBar__one-left lg-t-center">
                    <ul>
                        <li>
                            <a href="mailto:{{ $contactEmail ?? 'need.help@gmail.com' }}">
                                <i class="flaticon-envelope"></i>{{ $contactEmail ?? 'need.help@gmail.com' }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ $addressLink ?? 'https://google.com/maps' }}">
                                <i class="flaticon-placeholder"></i>{{ $address ?? '2464 Royal Ln. Mesa, New Jersey 45463' }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="topBar__one-right t-right lg-t-center">
                    <div class="topBar__one-right-social">
                        <h6>Follow Us</h6>
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
        </div>
    </div>
</div>
<!-- Top Bar Area End -->
