<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GreenHost - Web Hosting HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset ('template/assets/img/favicon.ico')}}" rel="icon">

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
                <div class="container my-5 px-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="mb-3">Search Your Domain</h1>
                                <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                            </div>

                        </div>
                        
                        <div class="col-lg-auto mb-4">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset ('template/assets/img/about.png')}}">
                        </div>

                        <a href="/list" class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-secondary animated slideInLeft">
                                More Info        
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
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