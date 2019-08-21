@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url(img/slider_2.jpg);" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                                <h2>Blog</h2>
                                <p>Free HTML5 Template by <a href="https://uicookies.com/" target="_blank">uicookies.com</a>. Far far away, behind the word mountains, far from the countries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- END: slider  -->

    <section class="probootstrap-section ">
        <div class="container">

            <div class="row">
                @foreach($posts as $p)
                    <div class="col-md-4 probootstrap-animate">
                        <div class="probootstrap-card with-hover">
                            <div class="probootstrap-card-media">
                                <a href="{{route('blog.show',['id'=>$p->slug])}}"><img src="{{Voyager::image($p->getThumbnail($p->image,'cropped'))}}" class="img-responsive w-100 img-border"
                                                                                       alt="{{$p->title}}"></a>
                            </div>
                            <div class="probootstrap-card-text">
                                <h2 class="probootstrap-card-heading mb0">{{$p->title}}</h2>
                                <p class="category">{{$p->category->name}}</p>
                                <p><a href="{{route('blog.show',['id'=>$p->slug])}}">View details</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection


