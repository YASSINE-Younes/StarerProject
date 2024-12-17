@extends('Theme.master')
@section('home-active', 'active')
@section('title', 'Index');

@section('t1', 'Home Page');
@section('t2', 'Yassine Bogs');
@section('t3', 'Welcome');


@section('content')


    <!--================ Blog slider start =================-->
    <section>
        <div class="container">
            <div class="owl-carousel owl-theme blog-slider">
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png"
                            alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog slider end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">

        <div class="container">


            <div class="row">

                <div class="col-lg-8">


                    @if (count($blogs) > 0)

                        @foreach ($blogs as $blog)
                            <div class="single-recent-blog-post">
                                <div class="thumb">

                                    <style>
                                        .custom-image {
                                            width: 700px;
                                            height: 500px !important;
                                            object-fit: fill;
                                            
                                            /* Optionnel pour ajuster le contenu de l'image */
                                        }
                                    </style>
                                    <img class="img-fluid custom-image" width="800px" height="200px !important"
                                        src="{{ asset('storage') }}/blogs/{{ $blog->image }}" alt="">

                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>{{ $blog->user->name }}</a></li>
                                        <li><a href="#"><i
                                                    class="ti-notepad"></i>{{ $blog->created_at->format('d-M-Y') }}</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>
                                            {{ $blog->name }}
                                        </h3>
                                    </a>

                                    <p>
                                        {{ $blog->description }}
                                    </p>

                                    {{-- BUTTON READ MORE  --}}
                                    <a class="button" href="{{ route('blogs.show' , ['blog' => $blog]) }}">Read More <i class="ti-arrow-right"></i></a>
                              
                                

                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Aucun Blog Existe</h1>
                    @endif






                    {{-- PAGINATION --}}
                    <div class="row">

                        <div class="col-lg-12">
                            <nav class="blog-pagination justify-content-center d-flex">
                                {{ $blogs->render('pagination::bootstrap-4') }}
                            </nav>

                        </div>

                    </div>


                </div>

                <!-- Start Blog Post Siddebar -->
                @include('Theme.partials.sidebar')
                <!-- End Blog Post Siddebar -->
            </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection
