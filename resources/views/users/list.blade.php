<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @hasSection('title')
            <title>@yield('title')</title>
    @else
            <title>{{ $title ?? config('app.name') }}</title>
    @endif
    {{-- <title>GreenHost - Web Hosting HTML Template</title> --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset ('template/assets/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset ('template/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('template/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('template/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('template/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0 shadow">
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container px-lg-5">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">What's Your Problem ?</h1>
                        <p class="mb-1">Let's get to know more about problems surrounding dental health.</p>
                    </div>
                    <div class="row gy-5 gx-4 justify-content-center align-items-center">
                        <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="bg-light position-relative shadow rounded border-top border-5 border-secondary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-server text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <p class="mb-0">Let's find out!</p>
                                </div>
                                
                                <div class="p-4">
                                    @forelse ($materi as $item)
                                        <a href="{{ $item->link }}" target="_blank">
                                            <p class="border-bottom pb-3">
                                                <i class="fa fa-check text-primary me-3"></i>
                                                {{ $item->title}}
                                            </p>
                                        </a>
                                    @empty
                                        <p class="border-bottom pb-3">Belum Ada Materi</p>
                                    @endforelse
                                </div>

                                <div class="text-center border-bottom p-4">
                                    <a class="btn btn-secondary px-4 py-2" href="{{ route ('inovation')}}">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="/">STARS</a>, All Right Reserved. 
                                
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="#">Subang Tech</a>
                                </br>
                                Distributed By <a class="border-bottom" href="#" target="_blank">Subang Tech</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="/">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('template/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset ('template/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset ('template/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset ('template/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset ('template/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset ('template/assets/js/main.js')}}"></script>
</body>

</html>