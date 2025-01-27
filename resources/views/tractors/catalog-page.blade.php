
@extends('indexes.layout2')
@section('content')
    <style>.bannerin5 {
            background-image: url("./Agricultural Machinery Supplier _ YTO_files/pro2.jpg") ;
            background-size: cover;
            min-height: 360px;
            background-position: 0 100%;
        }
        .bannerin {
            width: 100%;
            position: relative;
            overflow: hidden;
            background: url("./Agricultural Machinery Supplier _ YTO_files/pro2.jpg") ;
            background-size: cover;
            min-height: 340px;
            background-position: 0 90%;
        }</style>
<div class="content content_white">
    <div class="bannerin bannerin1">
        <div class="bannerinfo_pro">

        </div>
    </div>
    <div id="etw_right">
        <div class="js-gallery-wrap">
            <content>
                <h2 itemprop="name">Products</h2>
            </content>
            <div class="etw_products etw_products_two mb-4">
                <ul>

@foreach($tractors as $tractor)
                        <li>
                            <ol>
                                <li class="product_img"><a href="{{ route('catalogs.show',$tractor->id) }}"><img class="img-fluid d-block mx-auto" src="/image/{{ $tractor->image }}"></a></li>
                                <li class="product_con"><a href="{{ route('catalogs.show',$tractor->id) }}">Tractors</a> <span>YTO, an advanced agricultural machinery supplier, provides different types of utility tractors, compact tractors and narrow tractors to suit various needs.</span> </li>
                                <div class="more2"><a href="http://www.ytocorp.com/5-tractors.html">Read More</a></div>
                            </ol>
                        </li>

@endforeach



                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="etw_service etw_service_pro">

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div id="etw_sidebar">
        <div class="etw_hometitle">Products</div>
        <div id="etw_productlist">
            <ul>
                <li>
                    <a href="http://www.ytocorp.com/5-tractors.html">Tractors</a>
                    <ol>

                        <li>
                            <a href="http://www.ytocorp.com/5-1-220-240hp-tractor-elx-series.html">220-240HP Tractor, ELX Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-1-220-240hp-tractor-elx-series.html">YTO-LX2204/ELX2404</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-2-260-300hp-tractor-elp-elz-series.html">260-300HP Tractor, ELP/ELZ Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-2-260-300hp-tractor-elp-elz-series.html">YTO-ELP2604/ELP2804/ELP3004/ELZ2804/ELZ3004</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-3-160-195-hp-tractor-elg-series.html">160-195 HP Tractor, ELG Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-3-160-195-hp-tractor-elg-series.html">YTO-ELG1604/ELG1754/ELG1954</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-4-130-140hp-tractor-nlx-series.html">130-140HP Tractor, NLX Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-4-130-140hp-tractor-nlx-series.html">YTO-NLX1304/NLX1404</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-5-80-115hp-tractor-nlx-nly-series.html">80-115HP Tractor, NLX/NLY Series</a>
                            <dl>

                                <li>
                                    <a href="http://www.ytocorp.com/5-5-1-80-115hp-tractor-nlx-nly-series.html">YTO-NLX854 / NLX954 / NLX1024 / NLX1054 / NLY1154E / EX800 / ELX954H</a>
                                </li>
                                <li><a href="http://www.ytocorp.com/5-5-2-90-110hp-tractor-nlx-nly-series.html">YTO-NLX904-1/NLX954-1/NLX1054-1/NLX1104-1</a></li>
                                <li><a href="http://www.ytocorp.com/5-5-3-97-115hp-tractor-nlx-nly-series.html">YTO-NLY954/NXY1054/NLY1154</a></li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-6-55-75hp-tractor-ef-emf-series.html">55-75HP Tractor, EF/EMF Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-6-1-65-75hp-tractor-ef-emf-series.html">YTO-EF654/EF704/EF754</a>
                                </li>
                                <li><a href="http://www.ytocorp.com/5-6-2-55-60hp-tractor-ef-emf-series.html">YTO-EMF554X/EMF604</a></li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-7-55-70hp-tractor-nmf-series.html">55-70HP Tractor, NMF Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-7-55-70hp-tractor-nmf-series.html">YTO-NMF554C/NMF604C/NMF704C</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-8-45-55hp-tractor-eme-series.html">45-55HP Tractor, EME Series</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/5-8-45-55hp-tractor-eme-series.html">YTO-EME454/NME504/NME554</a>
                                </li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-9-tractor-sk-esk-series.html">24-55HP Tractor, SK/ESK Series</a>
                            <dl>
                                <li><a href="http://www.ytocorp.com/5-9-24-55hp-tractor-sk-esk-series.html">YTO-SK244(254)/ESK404/ES454/ESK504</a></li>

                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/5-10-25-95hp-tractor-narrow-series.html">25-95HP Tractor, Narrow Series</a>
                            <dl>
                                <li><a href="http://www.ytocorp.com/5-10-1-25-60hp-tractor-narrow-series.html">YTO-SK254/ESK354/ESK454/EME554/EME604</a></li>
                                <li><a href="http://www.ytocorp.com/5-9-1-45-55hp-tractor-sk-esk-series.html">YTO-ESK454G/ESK504G/ESK554G</a></li>
                                <li><a href="http://www.ytocorp.com/5-10-3-50-65hp-tractor-narrow-series.html">YTO-ESG504G/ESG554G/ESG654G</a></li>
                                <li><a href="http://www.ytocorp.com/5-5-4-85-95hp-tractor-nlx-nly-series.html">YTO-NLX854F/NLX904F/NLX954F</a></li>
                            </dl>
                            <div class="more"></div>
                        </li>
                    </ol>
                </li>
                <li><a href="http://www.ytocorp.com/6-harvesting-equipment.html">Harvesting Equipment</a>
                    <ol>
                        <li><a href="http://www.ytocorp.com/6-1-grain-harvester.html">Grain Harvester</a></li>
                        <li><a href="http://www.ytocorp.com/6-2-corn-harvester.html">Corn Harvester</a></li>
                        <li><a href="http://www.ytocorp.com/6-3-electric-riding-lawn-mower.html">Electric Riding Lawn Mower</a></li>
                    </ol>
                </li>
                <li><a href="http://www.ytocorp.com/7-agricultural-implements.html">Agricultural Implements</a>
                    <ol>
                        <li><a href="http://www.ytocorp.com/7-1-front-loader-backhoe.html">Front Loader &amp; Backhoe</a></li>
                        <li><a href="http://www.ytocorp.com/7-2-disc-plough-disc-harrow.html">Disc Plough &amp; Disc Harrow</a></li>
                        <li><a href="http://www.ytocorp.com/7-3-rotary-tiller.html">Rotary Tiller</a></li>
                        <li><a href="http://www.ytocorp.com/7-4-planter.html">Planter</a></li>
                        <li><a href="http://www.ytocorp.com/7-5-dump-trailer.html">Dump Trailer</a></li>
                    </ol>
                </li>
                <li><a href="http://www.ytocorp.com/4-engine.html">Diesel Engine &amp; Genset</a>
                    <ol>
                        <li><a href="http://www.ytocorp.com/4a-diesel-engine.html">Diesel Engine</a></li>
                        <li><a href="http://www.ytocorp.com/4-2-generator-set.html">Generator Set</a></li>
                    </ol>
                </li>
                <li><a href="http://www.ytocorp.com/4b-diesel-engine-parts.html">OEM Parts</a></li>
                <li class="reviewpro">
                    <a href="http://www.ytocorp.com/products-b.html">1995-2018 Products</a>
                    <ol>
                        <li>
                            <a href="http://www.ytocorp.com/1-agricultural-machinery.html">Agricultural Machinery</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/1a-wheel-tractor.html">Wheeled Tractor</a>
                                </li>
                                <li><a href="http://www.ytocorp.com/1b-crawler-tractor.html">Crawler Tractor</a></li>
                                <li><a href="http://www.ytocorp.com/1c-combine-harvester.html">Combine Harvester</a></li>
                                <li><a href="http://www.ytocorp.com/1d-farming-tool.html">Implement &amp; Attachment</a></li>
                            </dl>
                            <div class="more"></div>
                        </li>
                        <li>
                            <a href="http://www.ytocorp.com/2-construction-machinery.html">Construction Machinery</a>
                            <dl>
                                <li>
                                    <a href="http://www.ytocorp.com/2a-road-roller.html">Road Roller</a>
                                </li>
                                <li><a href="http://www.ytocorp.com/2b-wheel-loader-1.html">Wheel Loader</a></li>
                                <li><a href="http://www.ytocorp.com/2c-motor-grader.html">Motor Grader</a></li>
                                <li><a href="http://www.ytocorp.com/2d-crawler-excavator-b.html">Crawler Excavator</a></li>
                                <li><a href="http://www.ytocorp.com/2e-bulldozer-1.html">Bulldozer</a></li>
                                <li><a href="http://www.ytocorp.com/2f-forklift-truck.html">Forklift Truck</a></li>
                                <li><a href="http://www.ytocorp.com/2g-refuse-compactor.html">Garbage Compactor</a></li>
                                <li><a href="http://www.ytocorp.com/2h-paver.html">Road Paver</a></li>
                                <li><a href="http://www.ytocorp.com/2i-road-recycler.html">Road Recycler</a></li>
                                <li><a href="http://www.ytocorp.com/2j-concrete-mixing-plant.html">Concrete Mixing Plant</a></li>
                                <li><a href="http://www.ytocorp.com/2k-asphalt-mixing-plant.html">Asphalt Mixing Plant</a></li>
                                <li><a href="http://www.ytocorp.com/2l-drilling-rig.html">Drilling Rig</a></li>
                                <li><a href="http://www.ytocorp.com/2m-mobile-power-station.html">Mobile Power Station</a></li>
                            </dl>
                            <div class="more"></div>
                        </li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
