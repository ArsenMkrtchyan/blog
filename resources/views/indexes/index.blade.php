@extends('indexes.layout2')

@section('content')

    <style>
        section {
            width: 100%;
            height: 100vh;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .slide {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            font-size: 18px;
            background: #fff;
            overflow: hidden;
        }
        .slide-image {
            position: absolute;
            top: -200px;
            left: -200px;
            width: calc(100% + 400px);
            height: calc(100% + 400px);
            background-position: 50% 50%;
            background-size: cover;
        }
        .slide-title {
            font-size: 4rem;
            line-height: 1;
            max-width: 50%;
            white-space: normal;
            word-break: break-word;
            color: #FFF;
            z-index: 100;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            font-weight: normal;
        }
        @media (min-width: 45em) {
            .slide-title {
                font-size: 7vw;
                max-width: none;
            }
        }
        .slide-title span {
            white-space: pre;
            display: inline-block;
            opacity: 0;
        }

        .slideshow {
            position: relative;
        }
        .slideshow-pagination {
            position: absolute;
            bottom: 5rem;
            left: 0;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            transition: .3s opacity;
            z-index: 10;
        }
        .slideshow-pagination-item {
            display: flex;
            align-items: center;
        }
        .slideshow-pagination-item .pagination-number {
            opacity: 0.5;
        }
        .slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
            cursor: pointer;
        }
        .slideshow-pagination-item:last-of-type .pagination-separator {
            width: 0;
        }
        .slideshow-pagination-item.active .pagination-number {
            opacity: 1;
        }
        .slideshow-pagination-item.active .pagination-separator {
            width: 10vw;
        }
        .slideshow-navigation-button {
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 5rem;
            z-index: 1000;
            transition: all .3s ease;
            color: #FFF;
        }
        .slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
        }
        .slideshow-navigation-button.prev {
            left: 0;
        }
        .slideshow-navigation-button.next {
            right: 0;
        }

        .pagination-number {
            font-size: 1.8rem;
            color: #FFF;
            font-family: 'Oswald', sans-serif;
            padding: 0 0.5rem;
        }

        .pagination-separator {
            display: none;
            position: relative;
            width: 40px;
            height: 2px;
            background: rgba(255, 255, 255, 0.25);
            transition: all .3s ease;
        }
        @media (min-width: 45em) {
            .pagination-separator {
                display: block;
            }
        }
        .pagination-separator-loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #FFFFFF;
            transform-origin: 0 0;
        }

    </style>
    <div>

        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
        <script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <section style="height: 700px">

            <div class="swiper-container slideshow">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1538083024336-555cf8943ddc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=66b476a51b19889e13182c0e4827af18&auto=format&fit=crop&w=1950&q=80)"></div>
                        <span class="slide-title">Exotic places</span>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1500375592092-40eb2168fd21?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e07d2457879a4e15577ec75a31023e47&auto=format&fit=crop&w=2134&q=80"></div>
                        <span class="slide-title">Meet ocean</span>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1482059470115-0aadd6bf6834?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=267bba9a4e280ec64388fe8fb01e9d1b&auto=format&fit=crop&w=1950&q=80"></div>
                        <span class="slide-title">Around the world</span>
                    </div>

                    <!--         <div class="swiper-slide slide">
                        <div class="slide-imageswiper-lazy" data-background="https://images.unsplash.com/photo-1538083024336-555cf8943ddc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=66b476a51b19889e13182c0e4827af18&auto=format&fit=crop&w=1950&q=80">
                        </div>
                        </div>
                        <span class="slide-title">Exotic places</span>
                      </div>

                      <div class="swiper-slide slide">
                        <div class="slide-image swiper-lazy" data-background="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e07d2457879a4e15577ec75a31023e47&auto=format&fit=crop&w=2134&q=80">
                        </div>
                        <span class="slide-title">Meet ocean</span>
                      </div>

                      <div class="swiper-slide slide">
                        <div class="slide-image swiper-lazy" data-background="https://images.unsplash.com/photo-1482059470115-0aadd6bf6834?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=267bba9a4e280ec64388fe8fb01e9d1b&auto=format&fit=crop&w=1950&q=80">
                        </div>
                        <span class="slide-title">Around the world</span>
                      </div> -->

                </div>

                <div class="slideshow-pagination"></div>

                <div class="slideshow-navigation">
                    <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
                </div>

            </div>

        </section>
        <script>
            // The Slideshow class.
            class Slideshow {
                constructor(el) {

                    this.DOM = {el: el};

                    this.config = {
                        slideshow: {
                            delay: 3000,
                            pagination: {
                                duration: 3,
                            }
                        }
                    };

                    // Set the slideshow
                    this.init();

                }
                init() {

                    var self = this;

                    // Charmed title
                    this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
                    this.DOM.slideTitle.forEach((slideTitle) => {
                        charming(slideTitle);
                    });

                    // Set the slider
                    this.slideshow = new Swiper (this.DOM.el, {

                        loop: true,
                        autoplay: {
                            delay: this.config.slideshow.delay,
                            disableOnInteraction: false,
                        },
                        speed: 500,
                        preloadImages: true,
                        updateOnImagesReady: true,

                        // lazy: true,
                        // preloadImages: false,

                        pagination: {
                            el: '.slideshow-pagination',
                            clickable: true,
                            bulletClass: 'slideshow-pagination-item',
                            bulletActiveClass: 'active',
                            clickableClass: 'slideshow-pagination-clickable',
                            modifierClass: 'slideshow-pagination-',
                            renderBullet: function (index, className) {

                                var slideIndex = index,
                                    number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);

                                var paginationItem = '<span class="slideshow-pagination-item">';
                                paginationItem += '<span class="pagination-number">' + number + '</span>';
                                paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
                                paginationItem += '</span>';

                                return paginationItem;

                            },
                        },

                        // Navigation arrows
                        navigation: {
                            nextEl: '.slideshow-navigation-button.next',
                            prevEl: '.slideshow-navigation-button.prev',
                        },

                        // And if we need scrollbar
                        scrollbar: {
                            el: '.swiper-scrollbar',
                        },

                        on: {
                            init: function() {
                                self.animate('next');
                            },
                        }

                    });

                    // Init/Bind events.
                    this.initEvents();

                }
                initEvents() {

                    this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
                    //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

                    this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));

                    this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));

                }
                animate(direction = 'next') {

                    // Get the active slide
                    this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
                        this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
                        this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
                        this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');

                    // Reverse if prev
                    this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();

                    // Get old slide
                    this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
                    if (this.DOM.oldSlide) {
                        // Get parts
                        this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
                            this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span');
                        // Animate
                        this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
                            TweenMax.to(letter, .3, {
                                ease: Quart.easeIn,
                                delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
                                y: '50%',
                                opacity: 0
                            });
                        });
                    }

                    // Animate title
                    this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
                        TweenMax.to(letter, .6, {
                            ease: Back.easeOut,
                            delay: pos*.05,
                            startAt: {y: '50%', opacity: 0},
                            y: '0%',
                            opacity: 1
                        });
                    });

                    // Animate background
                    TweenMax.to(this.DOM.activeSlideImg, 1.5, {
                        ease: Expo.easeOut,
                        startAt: {x: direction === 'next' ? 200 : -200},
                        x: 0,
                    });

                    //this.animatePagination()

                }
                animatePagination(swiper, paginationEl) {

                    // Animate pagination
                    this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
                    this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
                    this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');

                    console.log(swiper.pagination);
                    // console.log(swiper.activeIndex);

                    // Reset and animate
                    TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
                    TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
                        startAt: {scaleX: 0},
                        scaleX: 1,
                    });


                }

            }

            const slideshow = new Slideshow(document.querySelector('.slideshow'));

        </script>

    </div>
    <div class="clearfix"></div>
    <div class="etw_mainproducts">
        <div class="content">
            <div class="etw_hometitle">Global Leading Agricultural and Construction Machinery Since 1955</div>
            <ul>
                <li>
                    <ol>
                        <li class="product_img"><a href="http://www.ytocorp.com/5-tractors.html"><img src="./Agricultural Machinery Supplier _ YTO_files/pro1.jpg" alt="Tractors"></a></li>
                        <li class="product_con"><a href="http://www.ytocorp.com/5-tractors.html">Tractors</a> </li>
                        <div class="more"><a href="http://www.ytocorp.com/5-tractors.html">Read More</a></div>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li class="product_img"><a href="http://www.ytocorp.com/6-harvesting-equipment.html"><img src="./Agricultural Machinery Supplier _ YTO_files/pro2.jpg" alt="Harvesting Equipment"></a></li>
                        <li class="product_con"><a href="http://www.ytocorp.com/6-harvesting-equipment.html">Harvesting Equipment</a></li>
                        <div class="more"><a href="http://www.ytocorp.com/6-harvesting-equipment.html">Read More</a></div>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li class="product_img"><a href="http://www.ytocorp.com/7-agricultural-implements.html"><img src="./Agricultural Machinery Supplier _ YTO_files/pro3.jpg" alt="Agricultural Implements"></a></li>
                        <li class="product_con"><a href="http://www.ytocorp.com/7-agricultural-implements.html">Agricultural Implements</a></li>
                        <div class="more"><a href="http://www.ytocorp.com/7-agricultural-implements.html">Read More</a></div>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li class="product_img"><a href="http://www.ytocorp.com/4-engine.html"><img src="./Agricultural Machinery Supplier _ YTO_files/pro4.jpg" alt="Diesel Engine &amp; Genset"></a></li>
                        <li class="product_con"><a href="http://www.ytocorp.com/4-engine.html">Diesel Engine &amp; Genset</a> </li>
                        <div class="more"><a href="http://www.ytocorp.com/4-engine.html">Read More</a></div>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="etw_service">
        <div class="content">
            <ul>
                <li>
                    <ol>
                        <li class="pro_img"><a href="http://www.ytocorp.com/capabilities.html"><img src="./Agricultural Machinery Supplier _ YTO_files/service01.jpg"></a></li>
                        <li class="pro_txt"><a href="http://www.ytocorp.com/capabilities.html">Capabilities</a><span>YTO has maintained the long-term partnership with world-class R&amp;D institutions in America, U.K. and Austria, keeping in line with the state-of-the-art technology in the world.</span></li>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li class="pro_img"><a href="http://www.ytocorp.com/service.html"><img src="./Agricultural Machinery Supplier _ YTO_files/service02.jpg"></a></li>
                        <li class="pro_txt"><a href="http://www.ytocorp.com/service.html">Service &amp; Support</a><span>Wining trust of clients from more than 100 countries and regions, we have built manufacturing and R&amp;D bases in France, Belarus, Cuba and South Africa.</span></li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="etw_mainbody">
        <div class="content">
            <div class="etw_hometitle"><a href="http://www.ytocorp.com/about.html">YTO Group</a></div>
            <ul>
                <li>
                    <ol>
                        <li class="pro_img"><a href="http://www.ytocorp.com/about.html"><img src="./Agricultural Machinery Supplier _ YTO_files/company.jpg" alt="About YTO "></a></li>
                        <li class="pro_txt"><a href="http://www.ytocorp.com/about.html">About YTO</a><span>YTO Group Corporation (hereinafter referred to as YTO) is a comprehensive enterprise group mainly engaged ivn machinery manufacturing under China National Machinery Industry Corporation Ltd (Sinomach) which is Top 500 enterprises in the world. </span></li>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li class="pro_img"><a href="http://www.ytocorp.com/manufacturing.html"><img src="./Agricultural Machinery Supplier _ YTO_files/group01.jpg" alt="Manufacturing Capabilities"></a></li>
                        <li class="pro_txt"><a href="http://www.ytocorp.com/manufacturing.html">Manufacturing Capabilities</a><span>YTO Owns the annual production capacity of 120,000 units of tractors. YTO Owns the annual production capacity of 230,000 units of diesel engines.</span></li>
                    </ol>
                    <ol>
                        <li class="pro_img"><a href="http://www.ytocorp.com/r-d.html"><img src="./Agricultural Machinery Supplier _ YTO_files/group02.jpg" alt="R&amp;D Power"></a></li>
                        <li class="pro_txt"><a href="http://www.ytocorp.com/r-d.html">R&amp;D Power</a><span>YTO owns National-level R &amp; D Center, National-level Tractor Quality Supervision and Evaluation Center, power system lab and National-level test base.</span></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
            <ul class="contact_item">
                <li><a href="http://www.ytocorp.com/video.html"><img src="./Agricultural Machinery Supplier _ YTO_files/group03.jpg" alt="YTO Machinery in the World "><span>YTO Machinery in the World</span></a></li>
                <li><a href="http://www.ytocorp.com/contact.html"><img src="./Agricultural Machinery Supplier _ YTO_files/email.jpg" alt="Visit and Contact Us"> <span>Visit and Contact Us</span></a></li>
                <li><a href="http://www.ytocorp.com/video.html"><img src="./Agricultural Machinery Supplier _ YTO_files/video.jpg" alt="Find a Dealer"> <span>Video Show</span></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>


@endsection





{{--<div>--}}

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <!------ Include the above in your HEAD tag ---------->--}}

{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">--}}

{{--    <div class="container">--}}
{{--        <h1 class="text-center">Contact Address</h1>--}}
{{--        <hr>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-8">--}}
{{--                <html>--}}
{{--                <head>--}}
{{--                    <title>Add a Map with Markers using HTML</title>--}}

{{--                    <link rel="stylesheet" type="text/css" href="./style.css" />--}}
{{--                    <script type="module" src="./index.js"></script>--}}
{{--                </head>--}}
{{--                <body>--}}
{{--                <gmp-map--}}
{{--                    center="43.4142989,-124.2301242"--}}
{{--                    zoom="10"--}}
{{--                    map-id="DEMO_MAP_ID"--}}
{{--                    style="height: 400px"--}}
{{--                >--}}
{{--                    <gmp-advanced-marker--}}
{{--                        position="43.4142989,-124.2301242"--}}
{{--                        zoom="10"--}}
{{--                        title="Mountain View, CA"--}}
{{--                    ></gmp-advanced-marker>--}}

{{--                </gmp-map>--}}

{{--                <!----}}
{{--                  The `defer` attribute causes the script to execute after the full HTML--}}
{{--                  document has been parsed. For non-blocking uses, avoiding race conditions,--}}
{{--                  and consistent behavior across browsers, consider loading using Promises. See--}}
{{--                  https://developers.google.com/maps/documentation/javascript/load-maps-js-api--}}
{{--                  for more information.--}}
{{--                  -->--}}
{{--                <script--}}
{{--                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfSbZbiMuxa9YkTK8SqsTbr2L2GThdRGs&libraries=maps,marker&v=beta"--}}
{{--                    defer--}}
{{--                ></script>--}}
{{--                </body>--}}
{{--                </html>--}}
{{--            </div>--}}

{{--            <div class="col-sm-4" id="contact2">--}}
{{--                <h3>Sedi e Contatti</h3>--}}
{{--                <hr align="left" width="50%">--}}
{{--                <h4 class="pt-2">Sede operativa</h4>--}}
{{--                <i class="fas fa-globe" style="color:#000"></i> address<br>--}}
{{--                <h4 class="pt-2">Contatti</h4>--}}
{{--                <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> 123456 </a><br>--}}
{{--                <i class="fab fa-whatsapp" style="color:#000"></i><a href="tel:+"> 123456 </a><br>--}}
{{--                <h4 class="pt-2">Email</h4>--}}
{{--                <i class="fa fa-envelope" style="color:#000"></i> <a href="">test@test.com</a><br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--    <br><br>--}}
{{--    <style> hr {border-top: 1px solid #000; width:50%;}--}}

{{--        a {color: #000;}--}}

{{--        a:link{text-decoration:none;}--}}

{{--        #contact2{--}}
{{--            letter-spacing:3px;--}}
{{--        }--}}



{{--        #author a{--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}

{{--        }</style>--}}



{{--</div>--}}
