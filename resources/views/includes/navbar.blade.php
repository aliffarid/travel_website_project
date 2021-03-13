<!-- navbar -->  
<div class="container ">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{route ('home')}}" class="navbar-brand">
            <img src="{{url ('frontend/images/bumantara_logo.png')}}" alt="logo Bumantara" /> 
        </a>
        <button
    class="navbar-toggler navbar-toggler-right"
    type="button"
    data-toggle="collapse"
    data-target="#navb"
    >
    <span class="navbar-toggler-icon"></span>
    </button>
        
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{route ('home')}}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    {{-- <a href="{{route ('details', ['slug'])}}" class="nav-link">Trip</a> --}}
                    <a href="#popular" class="nav-link">Trip</a>
                </li>

                <li class="nav-item dropdown">
                    <a 
                    class="nav-link dropdown-toggle" 
                    href="#" 
                    id="navbarDropdown"                 
                    data-toggle="dropdown" 
                    >
                    Services
                    </a>
                
                    <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">VISA</a>
                    <a href="#" class="dropdown-item">Passport</a>
                    </div>
                
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#testimonialHeading" class="nav-link">Testimonials</a>
                </li>
            </ul>

            @guest
                <!-- mobile btn -->

                <form  class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login  my-2 my-sm-0" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                        Sign In
                    </button>
                </form>
            

                <!-- desktop btn-->

                <form  class="form-inline my-2 my-lg-0 d-none  d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                        Sign In
                    </button>
                </form>   
            @endguest

            @auth
                <!-- mobile btn -->

                <form  class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login  my-2 my-sm-0" type="submit">
                        Log Out
                    </button>
                </form>
            

                <!-- desktop btn-->

                <form  class="form-inline my-2 my-lg-0 d-none  d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Log Out
                    </button>
                </form>   
            @endauth

        </div>
    </nav>
</div>