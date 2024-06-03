<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="template-color" content="#0E0E0E">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/template/favicon.svg') }}">
    <link href="{{ asset('assets/css/stylecd4e.css?version=4.1') }}" rel="stylesheet">
    @stack('style')

    {{-- Livewire Style --}}
    @livewireStyles
    {{-- Livewire Style --}}
</head>

<body>
    {{-- Preload --}}
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body pl-30 pr-30 pt-50">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Job Application </p>
                        <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                        <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.
                        </p>
                    </div>
                    <form class="login-register text-start mt-20 pb-30" action="#">
                        <div class="form-group">
                            <label class="form-label" for="input-1">Full Name *</label>
                            <input class="form-control" id="input-1" type="text" required="" name="fullname"
                                placeholder="Steven Job">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-2">Email *</label>
                            <input class="form-control" id="input-2" type="email" required="" name="emailaddress"
                                placeholder="stevenjob@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="number">Contact Number *</label>
                            <input class="form-control" id="number" type="text" required="" name="phone"
                                placeholder="(+01) 234 567 89">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="des">Description</label>
                            <input class="form-control" id="des" type="text" required="" name="Description"
                                placeholder="Your description...">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="file">Upload Resume</label>
                            <input class="form-control" id="file" name="resume" type="file">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span
                                    class="checkmark"></span>
                            </label><a class='text-muted' href='page-contact.html'>Lean more</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply
                                Job</button>
                        </div>
                        <div class="text-muted text-center">Do you need support? <a href='page-contact.html'>Contact
                                Us</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class='d-flex' href='index.html'><img alt="jobBox"
                                src="{{ asset('assets/imgs/template/jobhub-logo.svg') }}"></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li>
                                <a class='{{ request()->routeIs('beranda') | request()->routeIs('home') ? 'active' : '' }}'
                                    href='{{ route('beranda') }}'>
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a class='{{ request()->routeIs('kerja') ? 'active' : '' }}'
                                    href='{{ route('kerja') }}'>
                                    Cari Kerja
                                </a>
                            </li>
                            @auth
                                @if (Auth()->user()->role == 'owner')
                                    <li>
                                        <a class='{{ request()->routeIs('buat-lowongan') ? 'active' : '' }}'
                                            href="{{ route('buat-lowongan') }}">
                                            Buat Lowongan
                                        </a>
                                    </li>
                                @else
                                @endif
                            @endauth
                            <li>
                                <a class='{{ request()->routeIs('pricing') ? 'active' : '' }}'
                                    href='{{ route('pricing') }}'>
                                    Langganan
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    @auth
                        <div class="header-nav">
                            <div class="nav-main-menu">
                                <ul class="main-menu">
                                    <li class="has-children"><a>{{ auth()->user()->name }}</a>
                                        <ul class="sub-menu">
                                            <li><a class="{{ request()->routeIs('profile') ? 'active' : '' }}"
                                                    href='{{ route('profile') }}'>Profile</a></li>
                                            <li><a href='index-2.html'>Lamaran saya</a></li>
                                            <li><a class="text-danger" href='{{ route('logout') }}'
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div class="block-signin">
                            <a class='text-link-bd-btom hover-up' href='{{ route('register') }}'>Daftar</a>
                            <a class='btn btn-default btn-shadow ml-40 hover-up' href='{{ route('login') }}'>Masuk</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start-->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li><a class='active' href='{{ route('beranda') }}'>Beranda</a></li>
                                <li><a href='{{ route('kerja') }}'>Cari Kerja</a></li>
                                @auth
                                    @if (Auth()->user()->role == 'owner')
                                        <li><a href='index.html'>Buat Lowongan</a></li>
                                    @else
                                    @endif
                                @endauth
                                <li><a href='index.html'>Langganan</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        @auth
                            <h6 class="mb-10">Akun Anda</h6>
                        @endauth
                        <ul class="mobile-menu font-heading">
                            @guest
                                <li><a class='btn btn-default btn-shadow hover-up' href='{{ route('login') }}'>Masuk</a>
                                </li>
                            @endguest
                            @auth
                                <li><a class="{{ request()->routeIs('profile') ? 'active' : '' }}"
                                        href="{{ route('profile') }}">Profile</a></li>
                                <li><a href='#'>Lamaran saya</a></li>
                                <li><a class="text-danger" href='{{ route('logout') }}'
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endauth
                        </ul>
                    </div>
                    <div class="site-copyright">Copyright 2024 &copy; MusicianCareer.</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Main --}}
    <main class="main">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href='index.html'><img alt="jobBox"
                            src="{{ asset('assets/imgs/template/jobhub-logo.svg') }}"></a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2">
                        JobBox is the heart of the design community and the
                        best resource to discover and connect with designers and jobs worldwide.
                    </div>
                    <div class="footer-social">
                        <a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter"
                            href="#"></a><a class="icon-socials icon-linkedin" href="#"></a>
                    </div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <h6 class="mb-20">Resources</h6>
                    <ul class="menu-footer">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-3 col-md-2 col-xs-6">
                    <h6 class="mb-20">Community</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Credit</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-4 col-md-2 col-xs-6">
                    <h6 class="mb-20">Quick links</h6>
                    <ul class="menu-footer">
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Desktop</a></li>
                    </ul>
                </div>
                <div class="footer-col-5 col-md-2 col-xs-6">
                    <h6 class="mb-20">More</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-6 col-md-3 col-sm-12">
                    <h6 class="mb-20">Download App</h6>
                    <p class="color-text-paragraph-2 font-xs">Download our Apps and get extra 15% Discount on your
                        first
                        Order&mldr;!</p>
                    <div class="mt-15"><a class="mr-5" href="#"><img
                                src="{{ asset('assets/imgs/template/icons/app-store.png') }}" alt="joxBox"></a><a
                            href="#"><img src="{{ asset('assets/imgs/template/icons/android.png') }}"
                                alt="joxBox"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2024.
                            MusicianCareer all
                            right
                            reserved</span></div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy
                                Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms
                                &amp; Conditions</a><a class="font-xs color-text-paragraph"
                                href="#">Security</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Script --}}
    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/main8c94.js?v=4.1') }}"></script>

    {{-- Livewire Script --}}
    @livewireScripts
    {{-- Livewire Script --}}
</body>

</html>
