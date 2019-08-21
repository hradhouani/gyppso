@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url({{ Voyager::image($product->image) }});" class="overlay2">
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

    <section class="probootstrap-section" style="background-color: {{$category->color}} ">
        <div class="container">
            <div class="row mb50 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="col-md-8 p-0" id="galery">

                    <div class="row px-3">
                        @foreach(json_decode($product->gallery) as $i => $image)
                            <div class="mySlides w-100">
                                <div class="numbertext">{{$i+1}} / {{count(json_decode($product->gallery))}}</div>
                                <a href="#" data-featherlight="{{ Voyager::image($image) }}"> <img
                                        src="{{ Voyager::image($product->getThumbnail($image, 'medium')) }}"
                                        style="width:100%"></a>
                            </div>

                        @endforeach


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="row px-3">
                        @foreach(json_decode($product->gallery) as $i => $image)
                            <div class="col p-0">
                                <img class="demo cursor"
                                     src="{{ Voyager::image($product->getThumbnail($image, 'cropped')) }}"
                                     style="width:100%" onclick="currentSlide({{$i+1}})" alt="The Woods">
                            </div>
                        @endforeach

                    </div>


                </div>
                <div class="col-md-4">
                    {!! $product->body !!}
                </div>
            </div>

        </div>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div id="disqus_thread"></div>
        </div>
    </section>


@endsection


