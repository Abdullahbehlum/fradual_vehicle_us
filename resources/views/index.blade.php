<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>theautotrust.co.uk</title>
    <link rel="icon" href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('/assets/cropped-cropped_image-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-180x180.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home_sec.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pricing_sec.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer_counter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/care_vehicle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script async defer src="{{ asset('js/navbar.js') }}"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/noframework.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body>
    <x-header />
    <section id="content">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="home-bg1">
                        <div class="overlay-bg"></div>
                        <div class="content-wrap">
                            <h1 data-aos="fade-up" data-aos-duration="3000"> History Report Service</h1>
                            <p>Our company stands out for delivering history reports that are not only the fastest but
                                also the most detailed and accurate compared to our competitors in the market.</p>
                            <a href="/contact-us">
                                Get A QUOTE</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home-bg2">
                        <div class="overlay-bg"></div>
                        <div class="content-wrap">
                            <h1 data-aos="fade-up" data-aos-duration="3000"> History Report Service</h1>
                            <p>Our company stands out for delivering history reports that are not only the fastest but
                                also the most detailed and accurate compared to our competitors in the market.</p>
                            <a href="/contact-us">
                                Get A QUOTE</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home-bg3">
                        <div class="overlay-bg"></div>
                        <div class="content-wrap">
                            <h1 data-aos="fade-up" data-aos-duration="3000"> History Report Service</h1>
                            <p>Our company stands out for delivering history reports that are not only the fastest but
                                also the most detailed and accurate compared to our competitors in the market.</p>
                            <a href="/contact-us">
                                Get A QUOTE</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home-bg4">
                        <div class="overlay-bg"></div>
                        <div class="content-wrap">
                            <h1 data-aos="fade-up" data-aos-duration="3000"> History Report Service</h1>
                            <p>Our company stands out for delivering history reports that are not only the fastest but
                                also the most detailed and accurate compared to our competitors in the market.</p>
                            <a href="/contact-us">
                                Get A QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="service-section">
            <div class="spc_service">
                <div class="service-wrap">
                    <div class="service_col1">
                        <h2>Other services</h2>
                        <ul class="service_list">
                            <li>
                                <a href="/car-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> Car History Report
                                </a>
                            </li>
                            <li>
                                <a href="/motorbike-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> Motorbike History Report
                                </a>
                            </li>
                            <li>
                                <a href="/atv-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> ATV History Report
                                </a>
                            </li>
                            <li>
                                <a href="/truck-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> Truck History Report
                                </a>
                            </li>
                            <li>
                                <a href="/boat-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> Boat History Report
                                </a>
                            </li>
                            <li>
                                <a href="/rv-history-report">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                        </path>
                                    </svg> RV History Report
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="service_col2">
                        <h6>ABOUT OUR COMPANY</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000"> Welcome to The Auto Trust Discover Our
                            Comprehensive Services</h1>
                        <div class="custom-divider">
                            <span class="divider-separator"></span>
                        </div>

                        <p>Professional REG lookups are The Auto Trust area of expertise. Since this is our primary area
                            of expertise, we can offer the most accurate and current vehicle check. </p>
                        <a href="/about-us" class="btn-primary">
                            Discover More
                        </a>
                    </div>
                </div>
                <div class="featured_gallery">
                    <img src="{{ asset('/assets/dashboard-3510327_1280-1-1024x701.jpg') }}" alt="1"
                        data-aos="fade-right" data-aos-offset="350" data-aos-duration="900">
                    <img src="{{ asset('/assets/audi-8336484_1280-1024x701.jpg') }}" alt="2" data-aos="fade-left"
                        data-aos-offset="350" data-aos-duration="900" data-aos-easing="ease-in-sine">
                </div>
            </div>
        </section>

        <section id="customer_sec">
            <div class="customer-counter-section">
                <div class="counter-sec-wrap">
                    <div class="counter-col1">
                        <h1 id="happyCustomer">12K</h1>
                        <h4>Happy Customer </h4>
                    </div>
                    <div class="counter-col2">
                        <h1 id="customerSatisfaction">99%</h1>
                        <h4>Customer Satisfaction</h4>
                    </div>
                    <div class="counter-col3">
                        <h1 id="professionalExperts">78k+</h1>
                        <h4>Professional Expert</h4>
                    </div>
                    <div class="counter-col4">
                        <h1 id="yearsExperience">25+</h1>
                        <h4>Years Experience</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-service">
            <div class="our-ser-container">
                <h6>OUR SERVICES</h6>
                <h3>Services We Provide</h3>
                <div class="our-ser-wraps">
                    {{-- 1 --}}
                    <div class="s_card">
                        <div class="sr_card-header"></div>
                        <div class="sr_card-content">
                            <h1>Car History Report</h1>
                            <a href="/car-history-report" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="s_card">
                        <div class="sr_card-header_2"></div>
                        <div class="sr_card-content">
                            <h1>Motorbike History Report </h1>
                            <a href="/motorbike-history-report" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="s_card">
                        <div class="sr_card-header_3"></div>
                        <div class="sr_card-content">
                            <h1>ATV History Report</h1>
                            <a href="/atv-history-report" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                    {{-- 4 --}}
                    <div class="s_card">
                        <div class="sr_card-header_4"></div>
                        <div class="sr_card-content">
                            <h1>Truck History Report</h1>
                            <a href="/truck-history-report/" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                    {{-- 5 --}}
                    <div class="s_card">
                        <div class="sr_card-header_5"></div>
                        <div class="sr_card-content">
                            <h1>Boat History Report</h1>
                            <a href="/boat-history-report" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                    {{-- 6 --}}
                    <div class="s_card">
                        <div class="sr_card-header_6"></div>
                        <div class="sr_card-content">
                            <h1>RV History Report</h1>
                            <a href="/rv-history-report" class="sr_card_btn">
                                Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="auto-trust_section">
            <div class="overlay"></div>
            <div class="auto-trust-content" data-aos="fade-up" data-aos-duration="3000">
                <h3>The Auto Trust The Most Affordable And Immediate History Report Provider.</h3>
                <p>Empower your decisions with The Auto Trust prompt and budget-friendly vehicle history reports,
                    ensuring a confident choice in your pre-owned vehicle journey.
                </p>

            </div>
        </section>

        <div class="brad-container">
            <div class="brand-wrap">
                <div class="brand-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand4-ql05xu8ds0pwe7zo05tm41baesgq7gpvy0d0wdqn6w.webp') }}"
                                    width="120">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand3-ql05xtajl6om2m115nezjjjttelczrm5lvpjf3s1d4.webp') }}"
                                    width="120">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand2-ql05xscpecnbr02eb50cz1sd80pzs2if9r21xttfjc.webp') }}"
                                    width="120">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand1-ql05xqh10okr3s54m473u29g18z9coaylhr2z9w7vs.webp') }}"
                                    width="120">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand6-ql05xpj6tujgs66hrlsh9khzfv3w4z789d3lhzxm20.webp') }}"
                                    width="120">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('/assets/brand5-1-ql05xnnig6gw4y982kz84kz293d5pkzrl3smjg0eeg.webp') }}"
                                    width="120">
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <section id="pricing_sec">
            <div class="inner-container">
                <h4>HISTORY REPORT AT AFFORDABLE PRICES</h4>
                <h2 class="main_heading">Affordable Pricing</h2>
                <div class="custom-divider ">
                    <span class="divider-separator pricing-divider"></span>
                </div>

                <div class="pricing_container">
                    {{-- 1 --}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="7000">
                        <h3>Basic Car Report</h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$25</h2>
                            <h5 class="pack_dc">.99</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Overview
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Market Value
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Specifications
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Sales Listing
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accident Record
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Theft Record
                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Impounds

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Exports

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Active Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Expired Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                HQ Car Images

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Installed Options and Packages

                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Open Recalls


                            </li>
                        </ul>
                        <a href="/check-out?package=basic-car-report&price=25.99">
                            Buy Now
                        </a>
                    </div>
                    {{-- 2--}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="6000">
                        <h3>Basic Motorbike Report</h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$24</h2>
                            <h5 class="pack_dc">.99</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Overview
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Market Value
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Specifications
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Sales Listing
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accident Record
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Theft Record
                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Impounds

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Exports

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Active Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Expired Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                HQ Bike Images


                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Open Recalls
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Active Warranties
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Expired Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Installed Options and Packages

                            </li>
                        </ul>
                        <a href="/check-out?package=basic-motorbike-report&price=24.99">
                            Buy Now
                        </a>
                    </div>
                    {{-- 3 --}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="1000">
                        <h3>Basic ATV Report</h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$24</h2>
                            <h5 class="pack_dc">.00</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Overview
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Market Value
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Specifications
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Sales Listing
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accident Record
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Theft Record
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                HQ ATV Images
                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Open Recalls

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Exports

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Active Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Expired Warranties

                            </li>

                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Installed Options and Packages

                            </li>

                        </ul>
                        <a href="/check-out?package=basic-atv-report&price=24.00">
                            Buy Now
                        </a>
                    </div>
                    {{-- 4--}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200px">
                        <h3>Basic Truck Report</h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$27</h2>
                            <h5 class="pack_dc">.99</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Overview
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Market Value

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Specifications
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Sales Listing

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accident Record

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Theft Record

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                HQ Truck Images

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Open Recalls

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Exports

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Active Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Expired Warranties

                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Installed Options and Packages

                            </li>

                        </ul>
                        <a href="/check-out?package=basic-truck-report&price=27.99">
                            Buy Now
                        </a>
                    </div>
                    {{-- 5--}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="4000" data-aos-offset="200px">
                        <h3>Elite Boat Report
                        </h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$40
                            </h2>
                            <h5 class="pack_dc">.75</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accidents
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Hurricanes
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Fire
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Theft
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Run Aground
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Submerged
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Total Loss
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Registration History
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Vehicle Specifications
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Title History
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Recalls
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Warranties
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Auction Data
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Seized
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                USCG Documentation
                            </li>
                        </ul>

                        <a href="/check-out?package=elite-boat-report&price=40.75">
                            Buy Now
                        </a>
                    </div>
                    {{-- 6 --}}
                    <div class="pric_col" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="200px">
                        <h3>Basic RV Report
                        </h3>
                        <div class="pack_pric_container">
                            <h2 class="package_amount">$ 35</h2>
                            <h5 class="pack_dc">.99</h5>
                        </div>
                        <p>Delivery Duration: 2 Hours</p>
                        <ul class="pric_list">
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Vehicle Overview</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Market Value</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Vehicle Specifications</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Sales Listing</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Accident Record</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Theft Record</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> HQ ATV Images</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Open Recalls</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Exports</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Active Warranties</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Expired Warranties</li>
                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Installed Options and Packages
                            </li>
                        </ul>
                        <a href="/check-out?package=basic-rv-report&price=35.99">
                            Buy Now
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section id="relabile_trust">
            <div class="overlay"></div>
            <div class="relabile-wrap">
                <div class="relabile-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <h1>Reliable The Auto Trust, Inspections for Trusted
                        History Reports</h1>
                    <p>When seeking a used
                        vehicle, arming yourself with comprehensive data is essential for informed
                        decision-making. With The Auto Trust access an accurate vehicle history report instantly at the
                        most affordable rate.

                    </p>
                </div>
            </div>
        </section>


        <section id="why_choose_us_sec">
            <div class="choose_sec_container">
                <div class="choose_us_wrap">
                    <div class="choose_us-col">
                        <h4>WHY CHOOSE US</h4>
                        <h1>Call Us For The Best Moving Experience.</h1>
                        <img src="{{asset(path: './assets/plymouth-796441_1920_300x169.jpg')}}" decoding="async"
                            alt="car_img" width="1920" height="169">
                    </div>
                    <div class="sec_chosse_2">
                        <p class="cmt_parag">we offer unparalleled expertise backed by a team of seasoned professionals
                            who are dedicated
                            to delivering accurate and comprehensive assessments. Our commitment to cutting-edge
                            technology ensures that no detail goes unnoticed during the inspection process.
                        </p>
                        <div class="why_choose_inner_wrap">
                            <div class="why_col">
                                <figure>
                                    <img src="{{asset('./assets/key.png')}}" alt="key" width="512" height="512">
                                </figure>
                                <div class="content">
                                    <h2>History Report</h2>
                                    <p>Unlock a detailed vehicle history report revealing crucial insights into your
                                        potential purchase. </p>
                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="why_col">
                                <figure>
                                    <img src="{{asset('./assets/disc-brake.png')}}" alt="key" width="512" height="512">
                                </figure>
                                <div class="content">
                                    <h2>Mechanical Inspection
                                    </h2>
                                    <p>Ensure the mechanical integrity of your vehicle with our thorough inspection,
                                        covering crucial components.

                                    </p>
                                </div>
                            </div>
                            {{-- 3 --}}
                            <div class="why_col">
                                <figure>
                                    <img src="{{asset('./assets/computer.png')}}" alt="key" width="512" height="512">
                                </figure>
                                <div class="content">
                                    <h2>
                                        Accident History Check
                                    </h2>
                                    <p>
                                        Discover the full picture of your vehicle’s past, including any reported
                                        accidents or damages.
                                    </p>
                                </div>
                            </div>
                            {{-- 4 --}}
                            <div class="why_col">
                                <figure>
                                    <img src="{{asset('./assets/car-insurance.png')}}" alt="key" width="512"
                                        height="512">
                                </figure>
                                <div class="content">
                                    <h2>
                                        Odometer Verification

                                    </h2>
                                    <p>
                                        Get accurate mileage information, preventing any surprises and ensuring
                                        transparency in your purchase.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="parallex_bg"></div>

        <x-testimonials />

        <div id="home_Care_sh">
            <x-care-vehicle-sec />

        </div>
        <script>
            new Swiper('.swiper', {
                effect: 'fade',
                loop: true,
                autoplay: {
                    delay: 4500,
                }
            })


            new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 4500,
                },
                breakpoints: {

                    480: {
                        slidesPerView: 3,
                    },
                    1025: {
                        slidesPerView: 5,
                    }
                }
            });


            document.addEventListener('DOMContentLoaded', function () {
                AOS.init({
                    duration: 1000,
                    once: true,
                });

            });


        </script>
    </section>
    <x-footer />
</body>

</html>