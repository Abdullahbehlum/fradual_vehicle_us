<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us – theautotrust.co.uk</title>
    <link rel="icon" href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="{{asset('/assets/cropped-cropped_image-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://theautotrust.co.uk/wp-content/uploads/2024/07/cropped-cropped_image-180x180.png" />
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
    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/care_vehicle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script async defer src="{{asset("js/navbar.js")}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>
    <x-header />
    <section id="contact-us">

        <div class="parallex-section">
            <div class="overlay"></div>
            <div class="parallex-content">
                <h2>Contact Us</h2>
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
                        <a href="/contact-us">
                            Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>


        @if(session('success'))
            <script>
                toastr.success("{{ session('success') }}", "Success");
            </script>
        @endif



        <section class="contact_us_container">
            <div class="contact_us_wrap">
                <div class="contact_1">
                    <h6> CONTACT DETAIL</h6>
                    <h1>CONTACT WITH US</h1>
                    <p>Professional REG lookups are The Auto Trust area of expertise. Since this is our primary area of
                        expertise, we can offer the most accurate and current vehicle check.
                    </p>
                    <a href="/" class="contact_icon_wrap">
                        <div class="icon_Wrap">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-globe" viewBox="0 0 496 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z">
                                </path>
                            </svg>
                        </div>
                        <div class="contact_link_content">
                            <h3>Website</h3>
                            <h5>theautotrust.co.uk</h5>
                        </div>
                    </a>
                    <a href="mailto:Support@theautotrust.co.uk" class="contact_icon_wrap">
                        <div class="icon_Wrap">
                            <svg aria-hidden="true" class="e-font-icon-svg e-far-envelope" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z">
                                </path>
                            </svg>
                        </div>
                        <div class="contact_link_content">
                            <h3>Support</h3>
                            <h5>Support@theautotrust.co.uk</h5>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="contact_icon_wrap">
                        <div class="icon_Wrap">
                            <svg aria-hidden="true" class="e-font-icon-svg e-far-clock" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="contact_link_content">
                            <h3>Business Hours</h3>
                            <h5>9:00 AM To 6:00 PM</h5>
                        </div>
                    </a>
                </div>
                <div class="contact_2">
                    <div class="contact_form_container">
                        <h1>Get in touch with us.</h1>
                        <form method="POST" action="{{route('send_message')}}">
                            @csrf
                            <div class="fg-group-wrap">
                                <input type="text" placeholder="Name" name="name" id="name" autocapitalize="true"
                                    autofocus autocomplete="off">
                                <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number">
                            </div>
                            <div class="fg-group-wrap">
                                <input type="email" name="email" id="email" placeholder="Email" autofocus
                                    autocomplete="off" aria-hidden="true">
                                <input type="text" name="company" id="company" placeholder="Company"
                                    autocapitalize="true" autofocus autocomplete="off">
                            </div>
                            <div class="fg-group-wrap">
                                <input type="text" name="vin" id="vin" placeholder="REG/VIN/HULL No. "
                                    autocapitalize="true" autocomplete="off" autofocus autocapitalize="true">
                                <input type="text" name="company" id="company" autocapitalize="true"
                                    placeholder="Company" autofocus autocomplete="off">
                            </div>
                            <div class="fg-group">
                                <textarea name="message" placeholder="Message " id="message" cols="30" rows="10"
                                    autocapitalize="true" autocomplete="off" autofocus></textarea>
                            </div>

                            <button type="submit" class="btn-message">
                                <span class="button-text">SEND MY MESSAGE</span>
                                <span class="spinner"></span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <x-care-vehicle-sec />
    </section>
    <x-Footer />

</body>

</html>