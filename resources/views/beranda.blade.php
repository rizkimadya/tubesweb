<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ujian | Beranda</title>

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />

</head>


<body>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3"
                    href="index.html"> <img class="me-3" src="{{ asset('img/gallery/logo.png') }}"
                        alt="" /></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active"
                                    aria-current="page" href="index.html"></a></li>
                            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                    href="#events"></a></li>
                            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#services">
                                     </a></li>
                            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                    href="#testimonial"> </a></li>
                            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#country">
                                </a></li>
                        </ul>
                    </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url({{ asset('img/gallery/hero.png') }});background-position:right bottom;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-block d-md-none"
                style="background-image:url({{ asset('img/illustrations/hero-bg.png') }});background-position:right top;background-size:contain;margin-top:5.625rem;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-md-75 mt-7">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">Selamat Datang <span
                                class="text-primary">Peserta</span> Ujian
                        </h1>
                        <p class="mb-5 fs-1 lh-lg">Jika kamu tidak tahan terhadap penatnya belajar, maka kamu akan
                            menanggung bahayanya kebodohan..</p><a class="btn btn-lg btn-primary hover-top btn-glow"
                            href="{{ url('/login') }}">Mulai Ujian
                            <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                </path>
                            </svg></a>
              
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
