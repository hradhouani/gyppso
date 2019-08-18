@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url(img/slider_2.jpg);" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                                <h2>About Us</h2>
                                <p>Free HTML5 Template by <a href="https://uicookies.com/"
                                                             target="_blank">uicookies.com</a>. Far far away, behind the
                                    word mountains, far from the countries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- END: slider  -->

    <section class="probootstrap-section">
        <div class="container">
            <div class="row mb50 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="col-md-8 p-0" id="galery">

                    <div class="row px-3">
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_woods_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_woods_wide.jpg" style="width:100%"></a>
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_5terre_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_5terre_wide.jpg" style="width:100%"></a>
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_mountains_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%"></a>
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_lights_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_lights_wide.jpg" style="width:100%"></a>
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_nature_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%"></a>
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <a href="#" data-featherlight="https://www.w3schools.com/howto/img_snow_wide.jpg"> <img
                                    src="https://www.w3schools.com/howto/img_snow_wide.jpg" style="width:100%"></a>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="row px-3">
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_woods.jpg"
                                 style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_5terre.jpg"
                                 style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_mountains.jpg"
                                 style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_lights.jpg"
                                 style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_nature.jpg"
                                 style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                        </div>
                        <div class="col p-0">
                            <img class="demo cursor" src="https://www.w3schools.com/howto/img_snow.jpg"
                                 style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <h2 class="font-weight-bold">How We Started</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>

        </div>
    </section>



@endsection


