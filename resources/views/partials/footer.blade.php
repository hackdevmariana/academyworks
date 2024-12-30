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


                        @php
    // Obtener el idioma del usuario
    $userLanguage = app()->getLocale(); // Devuelve el idioma actual del usuario, por ejemplo: 'en'

    // Obtener el código de Mautic para el slug "newsletter" y el idioma del usuario
    $mauticCode = \App\Models\MauticCode::where('slug', 'newsletter')
        ->where('language', $userLanguage)
        ->first();

    // Inicializar variables con valores predeterminados
    $signUpNewsletter = null;
    $newsletterDescription = null;
    $mauticCodeContent = null;

    // Si se encuentra un código de Mautic, buscar las traducciones relacionadas
    if ($mauticCode) {
        $signUpNewsletter = \App\Models\Translation::where('key', 'sign-up-newsletter')
            ->where('locale', $userLanguage)
            ->value('value'); // Obtiene directamente el campo 'value'

        $newsletterDescription = \App\Models\Translation::where('key', 'newsletter-description')
            ->where('locale', $userLanguage)
            ->value('value'); // Obtiene directamente el campo 'value'

        $mauticCodeContent = $mauticCode->code; // Obtiene el código desde el modelo MauticCode
    }
@endphp

<!-- Renderizar el HTML -->
@if ($mauticCode && $signUpNewsletter && $newsletterDescription)
    <h5 class="footer-title">{{ $signUpNewsletter }}</h5>
    <p class="custom-capitalize m-b20">{{ $newsletterDescription }}</p>
    <div class="subscribe-form m-b20">
        {!! $mauticCodeContent !!}
    </div>
@else
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
        'twitter' => '#131313', 
        'x' => '#131313',       
        'instagram' => '#E1306C',
        'linkedin' => '#0077B5', 
        'youtube' => '#FF0000',  
    ];
    $iconClass = $icons[$profile->socialnetwork] ?? 'bi bi-globe';
    $color = $colors[$profile->socialnetwork] ?? 'black';
@endphp
    <a href="{{ $profile->url }}" target="_blank" class="text-decoration-none" title="{{ $profile->text }}">
        <i class="{{ $iconClass }} social-icon" style="font-size: 2rem; color: {{ $color }};"></i>
    </a>

@endforeach
@endif


                        
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <x-academy-column-footer />

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
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> 
                    
                    @php
                    // Obtener el idioma del usuario
                    $locale = app()->getLocale();
                
                    // Obtener la traducción correspondiente al idioma
                    $developed = \App\Models\Translation::where('key', 'developed-by')->where('locale', $locale)->value('value');
                
                    // Obtener los valores de Developer
                    $developer = \App\Models\Developer::first();
                @endphp
                
                @if ($developed && $developer)
                    {{ ucfirst($developed) }} <a target="_blank" href="{{ $developer->url }}">{{ $developer->name }}</a>
                @endif
                

                </div>
            </div>
        </div>
    </div>
</footer>
