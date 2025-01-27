{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Product - Brand</title>--}}
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
{{--                    <li class="nav-item"><a class="nav-link" href="aboutus.blade.php">About us</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link active" href="product-page.blade.php">Product</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="contact-us.blade.php">Contact Us</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
@extends('indexes.layout')
@section('content')

    <main class="page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div id="product-preview" class="vanilla-zoom">
                                        <div class="zoomed-image"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3>Tractor 1</h3>
                                    <div class="summary">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Vestibulum diam risus, sagittis at fringilla at, pulvinar vel risus. Vestibulum dignissim eu nulla eu imperdiet. Morbi mollis tellus a nunc vestibulum consequat. Quisque tristique elit et nibh dapibus sodales. Nam sollicitudin a urna sed iaculis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" role="tablist" id="myTab">
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="description-tab" href="#description">Description</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" id="specifications-tabs" href="#specifications">Specifications</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="reviews-tab" href="#reviews">Reviews</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade description" role="tabpanel" id="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <figure class="figure"><img class="img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></figure>
                                        </div>
                                        <div class="col-md-7">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 right">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="col-md-5">
                                            <figure class="figure"><img class="img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active specifications" role="tabpanel" id="specifications">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="stat" style="width: 568.922px;">Engine type</td>
                                                    <td><span style="color: rgb(17, 17, 17);">Air-cooled 6-cylinder turbocharged diesel engine</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Rated Engine HP (kW)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">161 (219)</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Engine speed (rpm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">2200</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Clutch</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">single-action</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Gears</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">12F/4R (Option 24F/8R)</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Gear shift mode</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Mechanical</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Speed range (km/h)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">2.00-36.69</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Brake</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Wet, disc</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Rear PTO (rpm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">540/1000</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Lift capacity (pivot point) (kN)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">≥75</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Hydraulic multiplier (set)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">3</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Dimensions (L*W*H) (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">5430*2750*3130</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Wheel base (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">2928</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Ground clearance (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">420</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Wheel track (F/R) (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">1552-2252/1700-2288</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Min. turning radius (m)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">7±0.3</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Tyre (F/R)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">16.9-28/20.8-38</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
{{--                                <div class="tab-pane fade" role="tabpanel" id="reviews">--}}
{{--                                    <div class="reviews">--}}
{{--                                        <div class="review-item">--}}
{{--                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>--}}
{{--                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reviews">--}}
{{--                                        <div class="review-item">--}}
{{--                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>--}}
{{--                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reviews">--}}
{{--                                        <div class="review-item">--}}
{{--                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>--}}
{{--                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('products.layout')
@section('content')
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
