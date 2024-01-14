<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <title>Document</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css" />

    <!--font awseome-->
    <link rel="stylesheet" href="/resources/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/resources/css/all.min.css" />

    <!--main style-->
    <link rel="stylesheet" href="/resources/css/style.css" />
  </head>
  <body>
    <!--navbar-->
    <section class="header">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#home">BARBERSHOP</a>
          <button
            class="navbar-toggler border-0 text-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, sunt.
              Totam quae doloribus enim consequatur!
            </p>
            <a href="#appointment">
              <button type="button" class="btn-all btn btn-warning text-light">
                Make a Appointmet
              </button></a
            >
          </div>
        </div>
      </div>
    </section>
    <!--end home-->

    <!--script bootstrap-->
    <script src="/resources/js/bootstrap.bundle.min.js"></script>

    <!--custom script-->
    <script src="/resources/js/script.js"></script>
  </body>
</html>
