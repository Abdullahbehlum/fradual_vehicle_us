<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us – theautotrust.co.uk</title>
    <link rel="icon" href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="{{asset('/assets/cropped-cropped_image-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-180x180.png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
    <link rel="stylesheet" href="{{asset('css/Footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/care_vehicle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="{{asset('/js/navbar.js')}}"></script>
    <style>
        .parallex-bike_content {
            padding-top: 14rem;
            display: flex;
            align-items: center;
            color: white;
            z-index: 1;
            position: relative;
            justify-content: space-around;
            padding-left: 4.5rem;
        }

        .parallex-bike_content h2 {
            font-family: "Barlow", Sans-serif;
            font-size: 61px;
            font-weight: 800;
            text-transform: capitalize;
            line-height: 64px;
            color: #FFFFFF;
            margin-bottom: 19px;
        }

        .parallex-bike_content h6 {
            font-family: "Barlow", Sans-serif;
            font-size: 17px;
            font-weight: 600;
            text-transform: none;
            line-height: 18px;
            color: #FFFFFF;
        }

        @media screen and (max-width:999px) {
            .parallex-bike_content {
                padding-top: 13.5rem;
                padding-left: 1.8rem;
                padding-right: 1.8rem;
                display: inline-block;
                width: 100%;
            }

            .parallex-bike_content h2 {
                font-size: 32px;
                line-height: 0.79;
                margin-bottom: 10px;
            }
            .breadcumb {
                right: 10px;
            }
          
        }
    </style>
</head>

<body>
    <x-header />
    <section id="about-us">
        <div class="parallex-section">
            <div class="overlay"></div>
            <div class="parallex-bike_content">
                <h2>About Us</h2>
                <ul class="breadcumb">
                    <li>
                        <a href="/">
                            Home</a>
                    </li>
                    <li>
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-alt-circle-right"
                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <a href="/about-us">
                            About Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="service-section">
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
                    <img src="{{asset('/assets/dashboard-3510327_1280-1-1024x701.jpg')}}" alt="1" data-aos="fade-right"
                        data-aos-offset="350" data-aos-duration="900">
                    <img src="{{asset('/assets/audi-8336484_1280-1024x701.jpg')}}" alt="2" data-aos="fade-left"
                        data-aos-offset="350" data-aos-duration="900" data-aos-easing="ease-in-sine">
                </div>
            </div>
        </div>
        <section id="vision_sec">
            <div class="vision_container">
                <div class="vision_contain_wrap">
                    <div class="vision_Col1">
                        <div class="icon_contain">
                            <svg aria-hidden="true" class="e-font-icon-svg e-far-lightbulb" viewBox="0 0 352 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="vision_content">
                            <h4>Vision</h4>
                            <p>To craft a vision statement for such a service, it's essential to articulate the
                                organization's objectives, values, and aspirations. A vision statement serves as a
                                succinct proclamation of an organization's enduring goals and the aspirations it seeks
                                to fulfill in the long term

                            </p>
                        </div>
                        <div class="icon_contain">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-rocket" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z">
                                </path>
                            </svg>
                        </div>
                        <div class="vision_content">
                            <h4>Mission</h4>
                            <p>
                                Our mission is to deliver thorough and dependable vehicle inspection verification
                                services, empowering individuals and businesses to make well-informed decisions about
                                their vehicles.
                            </p>
                        </div>
                    </div>
                    <div class="vision_col2">
                        <h6>WHO WE ARE</h6>
                        <h4 data-aos="fade-up" data-aos-duration="3000">Where Excellence Meets Service: Your Premier
                            Destination for Unmatched Quality and
                            Commitment.
                        </h4>
                        <p>Welcome to our vehicle check service, where precision meets dedication. Established with the
                            mission to ensure every vehicle on the road is safe and compliant, we pride ourselves on
                            delivering top-notch check services to our valued customers.
                        </p>
                        <p>From the moment you enter our facility, you’ll experience the highest level of
                            professionalism and care. Our dedicated team understands the crucial role vehicle safety
                            plays in your daily life, and we strive to provide thorough and accurate checks to give you
                            peace of mind.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div id="about_care_shcs">
            <x-care-vehicle-sec />
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 1000,
                once: true,
            });

        });
    </script>

    <x-Footer />

</body>

</html>