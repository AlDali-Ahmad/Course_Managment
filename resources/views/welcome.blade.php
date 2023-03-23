<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>{{__('eLEARNING')}}</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/coursetypes" class="nav-item nav-link active">{{__('Home')}}</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Teachers')}}</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                    @can('teacher_Home')
                    <li><a href="/teacher" class="dropdown-item">{{__('Home')}}</a></li>
                    @endcan
                    @can('teacher_create')
                    <li><a class="dropdown-item" href="/teacher/create">{{__('Create')}}</a></li>
                    @endcan
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Manager Rols')}}</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('users.index') }}">{{__('Manage Users')}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('roles.index') }}">{{__('Manage Role')}}</a></li>
                    @endguest
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Course Gategore')}}</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                    @can('coursetype_Home')
                    <li><a href="/coursetypes" class="dropdown-item">{{__('Home')}}</a></li>
                    @endcan
                    @can('coursetype_create')
                    <li><a class="dropdown-item" href="/coursetypes/create">{{__('Create')}}</a></li>
                    @endcan
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Lang')}}</a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log in<i class="fa fa-arrow-right ms-3"></i></a>
                @if (Route::has('login'))
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                        @auth
                            <i>
                                <a href="{{ url('/dashboard') }}" class="dropdown-item">{{__('Dashboard')}}</a>
                            </i>
                        @else
                            <a href="{{ route('login') }}" class="dropdown-item">{{__('Log in')}}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="dropdown-item">{{__('Register')}}</a>
                            @endif
                        @endauth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </ul>
                @endif


            </li>
        </div>

    </div>
</nav>
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('img/carousel-1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{__('Best Online Courses')}}</h5>
                            <h1 class="display-3 text-white animated slideInDown">{{__('The Best Online Learning Platform')}}</h1>
                            <p class="fs-5 text-white mb-4 pb-2">{{__('Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.')}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{__('Best Online Courses')}}</h5>
                            <h1 class="display-3 text-white animated slideInDown">{{__('Get Educated Online From Your Home')}}</h1>
                            <p class="fs-5 text-white mb-4 pb-2">{{__('Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.')}}</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('Read More')}}</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">{{__('Join Now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('contect')
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">{{__('Contact')}}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{__('SYRIA , IDLIB')}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+352 681 546 913</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>aldaliahmad418@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100087930757702&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/ahmad-aldali-748a72258"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.j')}}s"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
