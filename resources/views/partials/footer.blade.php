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
                        <a href="index.html">
                            <img src="{{ $logo->url ?? 'path/to/default/logo.png' }}" alt="{{ $logo->name ?? 'Default Logo' }}" style="max-height: 50px;">
                        </a>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="pt-social-link">
                        <ul class="list-inline m-a0 d-flex align-items-center mb-0">
                            @php
                                $socialProfiles = \App\Models\SocialProfile::where('owner_slug', 'me')->get();
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
                            @endphp
                            @foreach ($socialProfiles as $profile)
                                <li class="ms-2">
                                    <a href="{{ $profile->url }}" target="_blank" class="text-decoration-none" title="{{ $profile->text }}">
                                        <i class="{{ $icons[$profile->socialnetwork] ?? 'bi bi-globe' }}" style="font-size: 1.5rem; color: {{ $colors[$profile->socialnetwork] ?? 'black' }};"></i>
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
                <!-- Newsletter -->
                <div class="col-lg-6 col-md-12 footer-col-4">
                    <div class="widget">
                        @php
                            $userLanguage = app()->getLocale();
                            $mauticCode = \App\Models\MauticCode::where('slug', 'newsletter')->where('language', $userLanguage)->first();
                            $signUpNewsletter = \App\Models\Translation::where('key', 'sign-up-newsletter')->where('locale', $userLanguage)->value('value');
                            $newsletterDescription = \App\Models\Translation::where('key', 'newsletter-description')->where('locale', $userLanguage)->value('value');
                        @endphp

                        @if ($mauticCode && $signUpNewsletter && $newsletterDescription)
                            <h5 class="footer-title">{{ $signUpNewsletter }}</h5>
                            <p class="custom-capitalize m-b20">{{ $newsletterDescription }}</p>
                            <div class="subscribe-form m-b20">
                                {!! $mauticCode->code !!}
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Columnas de Contenido -->
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <!-- Academy Links -->
                        <div class="col-4">
                            <div class="widget footer_widget">
                                <x-academy-column-footer />
                            </div>
                        </div>

                        

                        <!-- Courses -->
                        <div class="col-4">
                            <div class="widget footer_widget">
                                @php
                                    $coursesTranslation = \App\Models\Translation::where('key', 'courses')->where('locale', $userLanguage)->value('value') ?? 'Courses';
                                    $courses = \App\Models\Course::where('language', $userLanguage)->get();
                                @endphp
                                <h5 class="footer-title">{{ $coursesTranslation }}</h5>
                                <ul>
                                    @foreach ($courses as $course)
                                        <li><a href="course/{{ $course->slug }}">{{ $course->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Links de Interés -->
                        <div class="col-4">
                            <div class="widget footer_widget">
                                @php
                                    $title = \App\Models\Translation::where('key', 'links-of-interest')->where('locale', $userLanguage)->value('value');
                                    $links = \App\Models\InterestLink::where('language', $userLanguage)->get();
                                @endphp
                                <h5 class="footer-title">{{ ucfirst($title) }}</h5>
                                <ul>
                                    @foreach ($links as $link)
                                        <li><a href="{{ $link->url }}">{{ $link->text }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @php
                        $copyData = \App\Models\Copy::where('language', $userLanguage)->first();
                        $copyText = $copyData?->text ?? 'Default copy text.';
                        $copyType = $copyData?->type ?? 'default';
                        $copyName = $copyData?->name ?? 'Default Name';
                    @endphp

                    @if ($copyType === 'copyleft')
                        <span class="copyleft">&copy;</span> {{ ucfirst($copyType) }} <strong><a href="{{ $copyData?->url }}">{{ $copyName }}</a></strong>. {{ $copyText }}
                    @else
                        &copy; {{ $copyName }} <strong>{{ $copyType }}</strong>. {{ $copyText }}
                    @endif

                    <br>

                    @php
                        $developed = \App\Models\Translation::where('key', 'developed-by')->where('locale', $userLanguage)->value('value');
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
