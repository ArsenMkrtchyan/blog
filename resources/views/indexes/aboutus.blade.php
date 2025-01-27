{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Blog Post - Brand</title>--}}
{{--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">--}}
{{--    <link rel="stylesheet" href="assets/css/aguilaraldo1_section_contact.css">--}}
{{--    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">--}}
{{--</head>--}}

{{--<body>--}}
{{--    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar">--}}
{{--        <div class="container"><a class="navbar-brand logo" href="index.blade.php">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>--}}
{{--            <div class="collapse navbar-collapse" id="navcol-1">--}}
{{--                <ul class="navbar-nav ms-auto">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="catalog-page.blade.php">Catalog</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="gallery.blade.php">Videos</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="blog-post-list.blade.php">Blog</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link active" href="aboutus.blade.php">About us</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="product-page.blade.php">Product</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="contact-us.blade.php">Contact Us</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

@extends('indexes.layout2')

@section('content')
    <main class="page">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url({{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/tractor3.jpeg')}});"></div>
                    <div class="post-body">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <figure class="figure"><img class="rounded img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/abousus2.jpeg')}}" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Lorem ipsum dolor</figcaption>
                        </figure>
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="figure"><img class="rounded img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/stonks.png')}}" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption>
                                </figure>
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
                            </div>
                        </div>
                        <h4>Lorem Ipsum dolor</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="figure"><img class="rounded img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/scenery/busines.jpg')}}" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
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
{{--    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>--}}
{{--    <script src="{{asset('assets/js/baguetteBox.min.js')}}" ></script>--}}
{{--    <script src="{{assert('assets/js/vanilla-zoom.js')}}" ></script>--}}
{{--    <script src="{{asset('assets/js/theme.js')}}" ></script>--}}
{{--</body>--}}

{{--</html>--}}
