{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Blog - Brand</title>--}}
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
{{--                    <li class="nav-item"><a class="nav-link active" href="blog-post-list.blade.php">Blog</a></li>--}}
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
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Blog Post List</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="block-content">
                    @foreach($blogs as $blog)
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid"  src="/image/{{ $blog->image }}"></div>
                            <div class="col-lg-7">
                                <h3>{{$blog->name}}</h3>
                                <div class="info"><span class="text-muted">{{ $blog->created_at->format('d-M-Y ') }}<a href="#">YOUR COMPANY</a></span></div>
                                <p>{{$blog->detail}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
