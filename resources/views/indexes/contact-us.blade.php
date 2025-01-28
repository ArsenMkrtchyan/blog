{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Contact Us - Brand</title>--}}
{{--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">--}}
{{--    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">--}}
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
{{--                    <li class="nav-item"><a class="nav-link" href="product-page.blade.php">Product</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link active" href="contact-us.blade.php">Contact Us</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
@extends('indexes.layout2')

@section('content')

    <div>

        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <div class="container">
            <h1 class="text-center">Contact Address</h1>
            <hr>
            <div class="row">
                <div class="col-sm-8">
                    <html>
                    <head>
                        <title>Add a Map with Markers using HTML</title>

                        <link rel="stylesheet" type="text/css" href="./style.css" />
                        <script type="module" src="./index.js"></script>
                    </head>
                    <body>
                    <gmp-map
                        center="40.817882,44.492218"
                        zoom="15"
                        map-id="DEMO_MAP_ID"
                        style="height: 400px"
                    >
                        <gmp-advanced-marker
                            position="40.817882,44.492218"
                            zoom="15"
                            title="Mountain View, CA"
                        ></gmp-advanced-marker>

                    </gmp-map>

                    <!--
                      The `defer` attribute causes the script to execute after the full HTML
                      document has been parsed. For non-blocking uses, avoiding race conditions,
                      and consistent behavior across browsers, consider loading using Promises. See
                      https://developers.google.com/maps/documentation/javascript/load-maps-js-api
                      for more information.
                      -->
                    <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfSbZbiMuxa9YkTK8SqsTbr2L2GThdRGs&libraries=maps,marker&v=beta"
                        defer
                    ></script>
                    </body>
                    </html>
                </div>

                <div class="col-sm-4" id="contact2">
                    <h3>AgroOne բռենդ</h3>
                    <hr align="left" width="50%">
                    <h4 class="pt-2">ՉինՎան ՍՊԸ</h4>
                    <i class="fas fa-user" style="color:#000"></i> Տնօրեն-Վահե Նաջարյան <br>
                    <i class="fas " style="color:#000"></i>Հեռ․<a href="tel:">+37441080851</a><br>
<p></p>
                    <i class="fas fa-globe" style="color:#000"></i> Հասցե<br>
                    <p></p>
                    <i class="fas " style="color:#000"></i>ք․ Վանաձոր, Շիրակի խճ․ 21<br>

                    <p></p>
                    <i class="fas fa-user" style="color:#000"></i> Վաճառքի բաժին -<br>
                    <i class="fas " style="color:#000"></i>Հեռ․<a href="tel:">+37441080831</a><br>
                    <i class="fas " style="color:#000"></i>Հեռ․<a href="tel:">+37441080891</a><br>

<p></p>

                    <h4 class="pt-2 fa fa-envelope" style="font-size: 20px">Email -</h4>
                    <i class="fa " style="color:#000"></i><a href="email:">infoagroone@gmail.com</a><br>
                </div>
            </div>
        </div>



        <br><br>
        <style> hr {border-top: 1px solid #000; width:50%;}

            a {color: #000;}

            a:link{text-decoration:none;}

            #contact2{
                letter-spacing:3px;
            }



            #author a{
                color: #fff;
                text-decoration: none;

            }</style>



    </div>

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
