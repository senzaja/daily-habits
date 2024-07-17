<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hairnic - Single Product Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('ass/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ass/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('ass/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('ass/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('layouts.front.navbar')
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Feedback</h1>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Contact Info Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-map-marker-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Address</h5>
                            <h5 class="fw-light text-white">SMK Assalaam Bandung</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-phone-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Call Us</h5>
                            <h5 class="fw-light text-white">+62 896 66 3495 09</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-envelope fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Mail Us</h5>
                            <h5 class="fw-light text-white">ssendy412@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-5"><span class="fw-light text-dark">If You Have Any Advice,</span> Please Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form action="{{route('feedback.store')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63380.92929109227!2d107.5851260484285!3d-6.9675288979318925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung%20(PUSAT%20KEUNGGULAN)!5e0!3m2!1sen!2sid!4v1683726921032!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Newsletter End -->

    <!-- Footer Start -->
    @include('layouts.front.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ass/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('ass/assets/js/main.js') }}"></script>
</body>

</html>
