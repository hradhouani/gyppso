@extends('layouts.app')

@section('content')



    <!-- END: header -->
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url({{url('media/'.$page->image)}});" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                                <h2>{{$page->title}}</h2>
                                <p>{{$page->excerpt}}</p>
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
            <div class="row justify-content-center">
                <div class="col-md-9 mb50">
                    {!! $page->body !!}
                </div>

            </div>
        </div>
    </section>

@endsection


