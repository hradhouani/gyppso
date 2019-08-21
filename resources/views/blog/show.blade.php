@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url({{Voyager::image($post->image) }});" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                                <h2>{{$post->title}}</h2>
                                <p>
                                    {{$post->excerpt}}
                                </p>
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
            <div class="row justify-content-md-center mb50 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="col-md-10 ">

                {!! $post->body !!}
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


