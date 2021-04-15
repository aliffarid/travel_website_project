@extends('layouts.app')

@section('title')
    Bumantara
@endsection

@section('content')
    <!-- header -->
    <header class="text-center">
        <h1>Go Anywhere with One Click</h1>
        <p class="mt-3">Explore the Beautiful Moment you never see before</p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>


    <main>
        <!-- statistics -->
            <div class="container">
                <section class="section-stats row justify-content-center"   id="stats">
                    <div class="col-3 col-md-2 stats-details">
                        <h2>15K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>3K</h2>
                        <p>Hotel</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>10</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div>
            <!-- popular -->
        <section class="section-popular"    id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Popular Destination</h2>
                        <p>Something that you never try
                            <br/>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content"    id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div 
                            class="card-travel text-center d-flex flex-column" 
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''}}');">
                            <div class="travel-country">{{ $item->location}}</div>
                            <div class="travel-location">{{$item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('details', $item->slug)}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Network -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br/>
                            more than just a trip</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img 
                        src="frontend/images/logos_partner.png" 
                        alt="Logo Partner" 
                        class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them <br/>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content"    id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="card card-testimonial text-center">
                                                <div class="testimonial-content">
                                                    <img src="frontend/images/user_pic.png" alt="User"  class="mb-4 rounded-circle">
                                                    <h3 class="mb-4">Manuel Muller</h3>
                                                    <p class="testimonial">"It was glorious and I could 
                                                        not stop to say wohooo for 
                                                        every single moment
                                                        Dankeeeeee"</p>
                                                </div>
                                                <hr>
                                                <p class="trip-to mt-2">
                                                    Trip to Ubud
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="card card-testimonial text-center">
                                                <div class="testimonial-content">
                                                    <img src="frontend/images/user_pic2.png" alt="User"  class="mb-4 rounded-circle">
                                                        <h3 class="mb-4">Alan Gregory</h3>
                                                        <p class="testimonial">"It was amazing and I could'nt 
                                                            belive how tall skytree is 
                                                            every single moment
                                                            is amazing"</p>
                                                </div>
                                                <hr>
                                                <p class="trip-to mt-2">
                                                    Trip to Tokyo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="card card-testimonial text-center">
                                                <div class="testimonial-content">
                                                    <img src="frontend/images/user_pic3.png" alt="User"  class="mb-4 rounded-circle">
                                                    <h3 class="mb-4">Lana Chang</h3>
                                                    <p class="testimonial">"Bangkok is really crowded 
                                                        it's good to see a lot of people 
                                                        this trip is amazing"</p>
                                                </div>
                                                <hr>
                                                <p class="trip-to mt-2">
                                                    Trip to Bangkok
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                @guest
                <div class="row justify-content-center">
                    <div class="col-6  need-help">
                        <h2>Need some help?</h2>
                        <p>if you still confused and didn't know how to use
                            <br>
                            this website, please contact us, we will help and
                            support you</p>
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{url ('register')}}" class="btn btn-get-register px-4 mt-4 mx-1">
                            Register Now
                        </a>
                    </div>
                </div>
                @endguest

                @auth
                <div class="row justify-content-center">
                    <div class="col-6  need-help">
                        <h2>Need some help?</h2>
                        <p>if you still confused and didn't know how to use
                            <br>
                            this website, please contact us, we will help and
                            support you</p>
                        <a href="#" class="btn text-center btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                    </div>
                </div
                @endauth
            </div>
        </section>

        {{-- <section class="section section-testimonial-content"    id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic.png" alt="User"  class="mb-4 rounded-circle">
                                <h3 class="mb-4">Manuel Muller</h3>
                                <p class="testimonial">"It was glorious and I could 
                                    not stop to say wohooo for 
                                    every single moment
                                    Dankeeeeee"</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud, Bali
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic2.png" alt="User"  class="mb-4 rounded-circle">
                                <h3 class="mb-4">Alan Gregory</h3>
                                <p class="testimonial">"It was amazing and I could'nt 
                                    belive how tall skytree is 
                                    every single moment
                                    is amazing"</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Tokyo, Japan
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic3.png" alt="User"  class="mb-4 rounded-circle">
                                <h3 class="mb-4">Lana Chang</h3>
                                <p class="testimonial">"Bangkok is really crowded 
                                    it's good to see a lot of people 
                                    this trip is amazing"</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bangkok, Thailand
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
    
    </main>
@endsection