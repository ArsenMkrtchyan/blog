


{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Catalog - Brand</title>--}}
{{--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">--}}
{{--    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/aguilaraldo1_section_contact.css">--}}
{{--    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">--}}
{{--</head>--}}

{{--<body>--}}
{{--    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar">--}}
{{--        <div class="container"><a class="navbar-brand logo" href="index.blade.php">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>--}}
{{--            <div class="collapse navbar-collapse" id="navcol-1">--}}
{{--                <ul class="navbar-nav ms-auto">--}}
{{--                    <li class="nav-item"><a class="nav-link active" href="catalog-page.blade.php">Catalog</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="gallery.blade.php">Videos</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="blog-post-list.blade.php">Blog</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="aboutus.blade.php">About us</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="product-page.blade.php">Product</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="contact-us.blade.php">Contact Us</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
@extends('indexes.layout')

@section('content')
    <main class="page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">OUR TRACTORS</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="filter-item"></div>
                                </div>
                            </div>
                            <p style="margin: 22px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse" id="filters">
                                    <div class="filters">
                                        <div class="filter-item">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Brands</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Samsung</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Apple</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">HTC</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>OS</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Android</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">iOS</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row g-0">
                                    @foreach ($tractors as $tractor)
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="border-light-subtle clean-product-item">
                                                <div class="image"><a href="{{ route('catalogs.show',$tractor->id) }}"><img class="img-fluid d-block mx-auto" src="/image/{{ $tractor->image }}"></a></div>
                                                <div class="product-name"><a href="{{ route('catalogs.show',$tractor->id) }}">{{ $tractor->name }}</a></div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 2</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 3</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 4</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 5</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 6</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" ssrc="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 7</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 8</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-12 col-md-6 col-lg-4">--}}
                                    {{--                                        <div class="clean-product-item">--}}
                                    {{--                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/tech/tractor.jpeg')}}"></a></div>--}}
                                    {{--                                            <div class="product-name"><a href="#">Tractor 9</a></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
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
