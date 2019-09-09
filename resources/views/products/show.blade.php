@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url({{ Voyager::image($product->image) }});" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">

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
                <div class="col-md-6 p-0" id="galery">

                    <div class="row px-3">
                        @foreach(json_decode($product->gallery) as $i => $image)
                            <div class="mySlides w-100">
                                <div class="numbertext">{{$i+1}} / {{count(json_decode($product->gallery))}}</div>
                                <a href="#" data-featherlight="{{ Voyager::image($image) }}"> <img
                                        src="{{ Voyager::image($image) }}"
                                        style="width:100%"></a>
                            </div>

                        @endforeach


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="row px-3">
                        <div class="row justify-content-center">

                        @foreach(json_decode($product->gallery) as $i => $image)
                            <div class=" {{count(json_decode($product->gallery)) > 6 ? 'col' :'col-2'}} p-0">
                                <img class="demo cursor px-1"
                                     src="{{ Voyager::image($product->getThumbnail($image, 'cropped')) }}"
                                     style="width:100%" onclick="currentSlide({{$i+1}})" alt="The Woods">
                            </div>
                        @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                <h1 class="font-weight-bold">{{$product->title}}</h1>
                <p>{!! $product->body !!}</p>
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


