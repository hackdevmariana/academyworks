<footer>
    <div class="footer-top">


        <div class="pt-exebar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo -->
                    <div class="pt-logo">
                        @php
                            $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();
                        @endphp
                        @if($logo && $logo->url)
                            <a href="index.html">
                                <img src="{{ $logo->url }}" alt="{{ $logo->name }}" style="max-height: 50px;">
                            </a>
                        @else
                            <a href="index.html">
                                <img src="path/to/default/logo.png" alt="Default Logo" style="max-height: 50px;">
                            </a>
                        @endif
                    </div>
        
                    <!-- Redes Sociales -->
                    <div class="pt-social-link">
                        <ul class="list-inline m-a0 d-flex align-items-center mb-0">
                            @php
                                $socialProfiles = \App\Models\SocialProfile::where('owner_slug', 'me')->get();
                            @endphp
                            @foreach ($socialProfiles as $profile)
                                @php
                                    $icons = [
                                        'twitter' => 'bi bi-twitter-x',
                                        'x' => 'bi bi-twitter-x',
                                        'instagram' => 'bi bi-instagram',
                                        'linkedin' => 'bi bi-linkedin',
                                        'youtube' => 'bi bi-youtube',
                                    ];
                                    $colors = [
                                        'twitter' => '#131313', // Azul de Twitter
                                        'x' => '#131313',       // Azul para X (Twitter)
                                        'instagram' => '#E1306C', // Rosa de Instagram
                                        'linkedin' => '#0077B5', // Azul de LinkedIn
                                        'youtube' => '#FF0000',  // Rojo de YouTube
                                    ];
                                    $iconClass = $icons[$profile->socialnetwork] ?? 'bi bi-globe';
                                    $color = $colors[$profile->socialnetwork] ?? 'black';
                                @endphp
                                <li class="ms-2">
                                    <a href="{{ $profile->url }}" target="_blank" class="text-decoration-none" title="{{ $profile->text }}">
                                        <i class="{{ $iconClass }}" style="font-size: 1.5rem; color: {{ $color }};"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        



        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                    <div class="widget">
                        <h5 class="footer-title">Sign Up For A Newsletter</h5>
                        <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                        <div class="subscribe-form m-b20">
                            <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                <div class="ajax-message"></div>
                                <div class="input-group">
                                    <input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
                                    <span class="input-group-btn">
                                        <button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
                                    </span> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Company</h5>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="faq-1.html">FAQs</a></li>
                                    <li><a href="contact-1.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Get In Touch</h5>
                                <ul>
                                    <li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
                                    <li><a href="blog-classic-grid.html">Blog</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="event.html">Event</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Courses</h5>
                                <ul>
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="courses-details.html">Details</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                    <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">Our Gallery</h5>
                        <ul class="magnific-image">
                            <li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
            </div>
        </div>
    </div>
</footer>
