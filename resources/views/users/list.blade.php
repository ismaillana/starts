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
                <div class="container px-lg-5">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Our Hosting Plans</h1>
                        <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                    </div>
                    <div class="row gy-5 gx-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light position-relative shadow rounded border-top border-5 border-secondary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-share-alt text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">Share Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>2.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="bg-light position-relative shadow rounded border-top border-5 border-secondary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-server text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">VPS Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>5.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-secondary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="bg-light position-relative shadow rounded border-top border-5 border-secondary">
                                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                    <i class="fa fa-cog text-white"></i>
                                </div>
                                <div class="text-center border-bottom p-4 pt-5">
                                    <h4 class="fw-bold">Dedi Hosting</h4>
                                    <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                                </div>
                                <div class="text-center border-bottom p-4">
                                    <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                    <h1 class="mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>11.49<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                    <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                                </div>
                                <div class="p-4">
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                    <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                    <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
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