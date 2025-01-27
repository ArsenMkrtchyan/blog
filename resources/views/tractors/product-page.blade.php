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
@extends('indexes.layout2')
@section('content')

    <main class="page">
        <section class="clean-block clean-product dark">
            <div class="container" style="
    padding-top: 150px;">
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div id="product-preview" class="vanilla-zoom">
                                       <img class="img-fluid figure-img" width="555" src="/image/{{ $tractor->image }}"  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3> {{ $tractor->name }}</h3>
                                    <div class="summary">
                                        <p> {{ $tractor->text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" role="tablist" id="myTab">
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="description-tab" href="#description">Feautures</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" id="specifications-tabs" href="#specifications">Specifications</a></li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade description" role="tabpanel" id="description">
                                    <p>(DZER KOMPANIAYI TRAKTORNERI MASIN) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <figure class="figure"><img class="img-fluid figure-img" src="/image/{{ $tractor->image }}"></figure>
                                        </div>
                                        <div class="col-md-7">
                                            <h4>Feautures</h4>
                                            <p>{{ $tractor->features }}</p>
                                        </div>
                                    </div>
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-7 right">--}}
{{--                                            <h4>Lorem Ipsum</h4>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <figure class="figure"><img class="img-fluid figure-img" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></figure>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="tab-pane fade show active specifications" role="tabpanel" id="specifications">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="stat" style="width: 568.922px;">Engine type</td>
                                                    <td><span style="color: rgb(17, 17, 17);">{{ $tractor->enginetype }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Rated Engine HP (kW)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">{{ $tractor->ratedengine }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Engine speed (rpm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">{{ $tractor->enginespeed }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Clutch</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">{{ $tractor->clutch }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Gears</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">{{ $tractor->gears }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Gear shift mode</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);"> {{ $tractor->gearshiftmode }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Speed range (km/h)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);"> {{ $tractor->speedrange }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Brake</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">{{ $tractor->brake }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Rear PTO (rpm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);"> {{ $tractor->rearpto }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Lift capacity (pivot point) (kN)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);"> {{ $tractor->liftcapacity }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Hydraulic multiplier (set)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);"> {{ $tractor->hydraulic }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Dimensions (L*W*H) (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">{{ $tractor->dimensions }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Wheel base (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">  {{ $tractor->wheelbase }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Ground clearance (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">  {{ $tractor->groundclearance }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Wheel track (F/R) (mm)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">{{ $tractor->wheeltrack }}8</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);">Min. turning radius (m)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17); background-color: rgb(248, 248, 248);"> {{ $tractor->minturningradius }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat"><span style="color: rgb(17, 17, 17);">Tyre (F/R)</span></td>
                                                    <td><span style="color: rgb(17, 17, 17);">{{ $tractor->tyre }}</span></td>
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
