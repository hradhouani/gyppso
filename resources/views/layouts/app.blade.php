<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','')}} | {{\Request::route()->getName()}}</title>
    <meta name="description" content="{{config('app.name','')}}">
    <meta name="keywords" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="{{asset('js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/vendor/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div id="app">
    <!-- START: header -->

    <div class="probootstrap-loader"></div>

    <header role="banner" class="probootstrap-header">
        <div class="container">
            <a href="index.html" class="probootstrap-logo mr-2"><img src="{{asset('img/logo.jpg')}}" alt="" style="    height: 55px;"></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs ml-auto">
                <ul class="probootstrap-main-nav">
                    <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
                        <a href="{{route('home')}}">Home</a>

                    </li>
                    <li class="{{ (\Request::route()->getName() == 'products') ? 'active' : '' }} dropdown megamenu">
                        <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">

                                @foreach($categories as $cat)
                                    <div class=" my-md-3   col-md  ">
                                        <a class="dropdown-item text-md-center" href="{{route('products',['category'=>$cat->slug])}}">
                                            <img src="{{Voyager::image($cat->image)}}" class="d-none d-md-block img-responsive px-4 py-2" alt="">
                                            {{$cat->name}}
                                        </a>
                                    </div>
                                @endforeach


                            </div>

                        </div>

                    </li>
                    <li class="{{ (\Request::route()->getName() == 'blog') ? 'active' : '' }}"><a
                            href="{{route('blog.index')}}">Blog</a></li>
                    <li class="{{ (\Request::route()->getName() == 'services') ? 'active' : '' }}"><a
                            href="{{route('services')}}">Services</a></li>
                    <li class="{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}"><a
                            href="{{route('about')}}">About</a></li>
                    <li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"><a
                            href="{{route('contact')}}">Contact</a></li>
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
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there
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
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/scripts.min.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript"
        charset="utf-8"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.js" type="text/javascript"
        charset="utf-8"></script>

@yield('js')

</body>
</html>

