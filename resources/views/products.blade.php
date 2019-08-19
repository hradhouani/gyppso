@extends('layouts.app')

@section('content')


    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url(img/slider_2.jpg);" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn" >
                                <h2>Products</h2>
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
                <products data="{{json_encode($products)}}" categories="{{json_encode($categories)}}"></products>
            </div>

        </div>
    </section>



@endsection


