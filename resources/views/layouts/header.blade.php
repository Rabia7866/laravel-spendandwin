
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}">
                    <h2 class="text-white fw-bold m-0">Spend and Win</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    {{-- <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small> --}}
                    {{-- <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small> --}}
                    {{-- <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small> --}}
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">Spend and win</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('description') }}" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin Auth</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ url('/login') }}" class="dropdown-item">Login</a>
                                {{-- <a href="{{ url('register') }}" class="dropdown-item">Register</a> --}}
                            </div>
                        </div>
                        <a href="{{ url('/contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ url('registers') }}" class="btn btn-primary py-2 px-3">Register Yourself as Participant</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
