<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <title>Document</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />

    <!--font awseome-->
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}" />

    <!--font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <!--main style-->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
</head>

<body>
    <!--navbar-->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#home">BARBERSHOP</a>
                <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navmenu" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#appointment">Appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--end navbar-->

    <!--home-->
    <section id="home" class="main text-center text-sm-start">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 text-light">
                    <h1 class="fw-bold">Welcome To Our Barbershop</h1>
                    <p class="lead my-3">
                        Good hair style is needed for looking good.
                    </p>
                    <a href="#appointment">
                        <button type="button" class="btn-all btn btn-warning text-light">
                            Make a Appointmet
                        </button></a>
                </div>
            </div>
        </div>
    </section>
    <!--end home-->

    <!--service-->
    <section id="service" class="service">
        <div class="container text-center">
            <div class="title mt-5">
                <h1 class="fw-bold mb-4">OUR SERVICE</h1>
                <p class="mb-5">
                    Welcome to Our Barbershop! Embrace a new level of confidence with
                    the finest haircut services. Our offerings go beyond creating
                    styles; they craft an experience.
                </p>
            </div>
        </div>
        <!--cards-->
        <div class="service-card container mb-5">
            <div class="row gy-3 mb-3">
                @foreach ($services as $item)
                    <div class="col-md">
                        <div class="shadow-sm card card-style text-center">
                            <div class="card-body">
                                <img class="mt-4 mb-3" src="{{ asset('assets/img/barbershop.png') }}" />
                                <h5 class="card-title mb-3 fw-bold">{{ $item->name }}</h5>
                                <p class="card-text">
                                    Elevate your style with our signature Haircut Style service at
                                    the barbershop. Our skilled barbers craft personalized looks
                                    for a confident and refined appearance.
                                </p>
                            </div>
                            <a href="#" class="button h3"><i
                                    class="button-arrow mt-2 mb-5 fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--end service-->

    <!--pricing-->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="content-price text-center">
                <h2 class="fw-bold text-light">PRICING PLAN</h2>
                <p class="lead text-light">Reasoneable Price we got</p>
                <div class="container">
                    <div class="d-flex justify-content-center row">
                        @foreach ($services as $item)
                            <div class="card card-price col-md-3 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-start fw-bold">{{ $item->name }}</h5>
                                    <p class="card-text text-start">Simple & Clean</p>
                                    <p class="card-text text-start">10-20 minute</p>
                                    <p class="card-cta fw-bold text-end">${{ $item->price }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end pricing-->

    <!--gallery-->
    <section id="gallery" class="gallery">
        <div class="container d-sm-flex align-items-center justify-content-between text-start">
            <div class="col-13">
                <div class="title mt-5 pt-3">
                    <div class="align-items-center">
                        <h1 class="fw-bold mb-4">GALLERY</h1>
                        <p class="mb-sm-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            saepe fugit suscipit dolorem ipsa alias veniam reiciendis.
                        </p>
                    </div>
                </div>
            </div>
            <a class="links" href="/gallery.html"><button type="button"
                    class="btn btn-all btn-warning text-light text-nowrap img-fluid d-md-block mb-5">
                    Explore More
                </button></a>
        </div>
        <!--cards-->
        <div class="container mb-5">
            <div class="row gy-3">
                <div class="col-md photo-g-01">
                    <div class="card text-center">
                        <img src="assets/img/gallery-01.png" alt="Man" loading="lazy" />
                        <div class="card-img-overlay text-light">
                            <div class="content-card">
                                <h5 class="card-title fw-bold">Hair Cutting</h5>
                                <h6 class="card-subtitle fw-bold">Barber & Hair Salon</h6>
                                <a href="/gallery.html" class="button h3"><i
                                        class="button-arrow-gallery mt-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md photo-g-01">
                    <div class="card text-center">
                        <img src="assets/img/gallery-02.png" alt="Man" loading="lazy" />
                        <div class="card-img-overlay text-light">
                            <div class="content-card">
                                <h5 class="card-title fw-bold">Hair Cutting</h5>
                                <h6 class="card-subtitle fw-bold">Barber & Hair Salon</h6>
                                <a href="/gallery.html" class="button h3"><i
                                        class="button-arrow-gallery mt-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md photo-g-01">
                    <div class="card text-center">
                        <img src="assets/img/gallery-03.png" alt="Man" loading="lazy" />
                        <div class="card-img-overlay text-light">
                            <div class="content-card">
                                <h5 class="card-title fw-bold">Hair Cutting</h5>
                                <h6 class="card-subtitle fw-bold">Barber & Hair Salon</h6>
                                <a href="/gallery.html" class="button h3"><i
                                        class="button-arrow-gallery mt-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end gallery-->

    <!--appointment-->
    <section id="appointment" class="appointment">
        <div class="container">
            <div class="content-appoin text-center">
                <h2 class="fw-bold text-light">MAKE APPOINTMENT</h2>
                <p class="text-light lead">Make appointment for your hair.</p>
                <div class="container w-50">
                    <form class="d-flex justify-content-center row" action="/appointment" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <input type="text" class="form-control mb-3" id="name" placeholder="Full Name"
                                name="name" />
                        </div>
                        <div class="col-md-6">
                            <div class="drop-down input-group">
                                <select class="drop-down w-100 form-select mb-3" aria-label="Select Barber"
                                    name="service" id="service">
                                    <option selected disabled>Select Service</option>
                                    @foreach ($services as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="drop-down input-group">
                                <select class="drop-down w-100 form-select mb-3" aria-label="Select Barber"
                                    name="barber" id="barber">
                                    <option selected disabled>Select Barber</option>
                                    @foreach ($barbers as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg">
                            <input type="date" class="drop-down form-control mb-3 mt-3"
                                id="exampleFormControlInput1" name="date" />

                            <input type="submit"
                                class="drop-down rounded-0 w-100 btn btn-outline-light btn-appoin text-light mb-3"
                                id="exampleFormControlInput1" value="Make a appointment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end appoinment-->

    <!--footer-->
    <section class="footer">
        <footer class="text-center text-lg-start text-white">
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Our Barbershop
                            </h6>
                            <p>Hope you get best experience from our barbershop</p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white" href="#home">Home</a>
                            </p>
                            <p>
                                <a class="text-white" href="#pricing">Pricing</a>
                            </p>
                            <p>
                                <a class="text-white" href="#gallery">Gallery</a>
                            </p>
                            <p>
                                <a class="text-white" href="#login">Login</a>
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none" />
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                    </div>
                </section>
                <hr class="my-3" />
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                <a class="text-white" href="#">OurBarbershop.com</a>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-google"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </section>
    <!--end footer-->

    <!--script bootstrap-->
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--custom script-->
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
