<!DOCTYPE html>

<html>

<head>



    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aguilaraldo1_section_contact.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/baguetteBox.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vanilla-zoom.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/ffontawesome-all.min.css')}}">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="{{route('index')}}">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('catalogs.index')}}">Catalog</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.blade.php">Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('blogpost')}}">Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About us</a></li>
                 <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a></li>
                @if(Auth::check() && Auth::user()->is_admin == 1)
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Admin page</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<div >

    @yield('content')

</div>
<footer class="page-footer dark" style="margin: 254px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="{{route('about-us')}}">Company Information</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Legal</h5>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2024 Copyright Text</p>
    </div>
</footer>

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>
<script src="{{asset('assets/js/baguetteBox.min.js')}}" ></script>
<script src="{{asset('assets/js/vanilla-zoom.js')}}" ></script>
<script src="{{asset('assets/js/theme.js')}}" ></script>
</body>

</html>
