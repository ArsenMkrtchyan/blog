@extends('indexes.layout')
{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Home - Brand</title>--}}
{{--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">--}}
{{--    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/aguilaraldo1_section_contact.css">--}}
{{--    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">--}}
{{--</head>--}}

{{--<body>--}}
@section('content')
    {{--    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar">--}}
    {{--        <div class="container"><a class="navbar-brand logo" href="index.blade.php">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>--}}
    {{--            <div class="collapse navbar-collapse" id="navcol-1">--}}
    {{--                <ul class="navbar-nav ms-auto">--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="catalog-page.blade.php">Catalog</a></li>--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="gallery.blade.php">Videos</a></li>--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="blog-post-list.blade.php">Blog</a></li>--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="aboutus.blade.php">About us</a></li>--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="product-page.blade.php">Product</a></li>--}}
    {{--                    <li class="nav-item"><a class="nav-link" href="contact-us.blade.php">Contact Us</a></li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
    <main class="page">
        <section class="clean-block clean-hero" style="background-image:url({{\Illuminate\Support\Facades\URL::asset('assets/img/tech/image4.jpg')}});color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/image5.jpg')}}"></div>
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Join Now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Bootstrap 5</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/image1.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/image4.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/image6.jpg')}}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <div class="carousel-indicators"><button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2"></button></div>
                </div>
            </div>
        </section>
    </main>
@endsection
{{--    <footer class="page-footer dark" style="margin: 254px;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-3">--}}
{{--                    <h5>Get started</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a href="index.blade.php">Home</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <h5>About us</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a href="aboutus.blade.php">Company Information</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <h5>Support</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a href="contact-us.blade.php">Contact Us</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <h5>Legal</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="footer-copyright">--}}
{{--            <p>© 2024 Copyright Text</p>--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--    <script src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
{{--    <script src="assets/js/baguetteBox.min.js"></script>--}}
{{--    <script src="assets/js/vanilla-zoom.js"></script>--}}
{{--    <script src="assets/js/theme.js"></script>--}}
{{--</body>--}}

{{--</html>--}}
