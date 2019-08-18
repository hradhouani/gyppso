<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Virb &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="{{asset('js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/vendor/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">Virb</a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                <li class="{{ (\Request::route()->getName() == 'products') ? 'active' : '' }}"><a href="{{url('products')}}">Portfolio</a></li>
                <li class="{{ (\Request::route()->getName() == 'services') ? 'active' : '' }}"><a href="{{route('services')}}">Services</a></li>
                <li class="{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <ul class="probootstrap-right-nav hidden-xs">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Address</h5>
                <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                <h5>Connect</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
@yield('content')


<footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
        <div class="row mb60">
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">About Virb.</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                    <p><a href="{{route('about')}}">Read more...</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget probootstrap-link-wrap">
                    <h4 class="heading">Quick Links</h4>
                    <ul class="stack-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">More Links</h4>
                    <ul class="stack-link">
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Support Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Subscribe</h4>
                    <p>Far far away behind the word mountains far from.</p>
                    <form action="#">
                        <div class="form-field">
                            <input type="text" class="form-control" placeholder="Enter your email">
                            <button class="btn btn-subscribe">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <div class="probootstrap-footer-widget">
                    <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Virb</a>. Designed by <a
                            href="https://uicookies.com/">uicookies.com</a> <br> Demo Photos from <a
                            href="https://unsplash.com/">Unsplash</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="probootstrap-footer-widget right">
                    <ul class="probootstrap-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>


<script src="{{asset('js/scripts.min.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>

@yield('js')

</body>
</html>

