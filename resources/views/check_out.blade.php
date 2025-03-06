<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Checkout - theautotrust.co.uk</title>
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
    <link rel="stylesheet" href="{{ asset('css/check_out.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <section id="check_out_page">
        <div class="check_out_bg">
            <div class="check_out_overlay"></div>
            <div class="bread_content">
                <h1>Checkout</h1>
                <div class="bred_wrap">
                    <a href="/">Home</a>
                    <p class="dots">
                        <svg aria-hidden="true" f class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                        </svg>
                    </p>
                    <a href="/check-out">Checkout</a>
                </div>
            </div>
        </div>
        <div class="check_out_sec">
            <div class="check_out_container">
                <form action="{{ route('process_payment') }}" method="POST">
                    @csrf
                    <div class="check_out_frm_wrap">
                        <div class="check_out_form">
                            <h4>Billing details</h4>
                            <div class="fg-group-wrap">
                                <div class="fg-group">
                                    <label for="fname">
                                        First name *
                                    </label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="fg-group">
                                    <label for="lname">
                                        Last name *
                                    </label>
                                    <input type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <div class="fg-group">
                                <label for="pnumber">
                                    Phone *
                                </label>
                                <input type="tel" id="pnumber" name="pnumber">
                            </div>

                            <div class="fg-group">
                                <label for="email">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="fg-group">
                                <label for="vin_number">
                                    VIN Number *
                                </label>
                                <input type="number" id="vin_number" name="vin_number">
                            </div>
                        </div>

                        <div class="check_out_details">
                            <h4>order details</h4>
                            <div class="order_detail_frm">
                                <div class="wrap_org">
                                    <h5>Product</h5>
                                    <h5>Subtotal</h5>
                                </div>
                                <div class="wrap_org">
                                    <input type="hidden" name="package_name"
                                        value="{{str_replace('-', ' ', $package_name)}}">
                                    <h5 style="text-transform: capitalize"> {{ str_replace('-', ' ', $package_name) }}
                                        <strong> x 1 </strong>
                                    </h5>
                                    {{-- £ --}}
                                    <h5> $ {{$package_price}} </h5>
                                </div>
                                <div class="wrap_org">
                                    <h5>Subtotal</h5>
                                    <h5 class="dis_price"> $ {{$package_price}} </h5>
                                </div>
                                <div class="wrap_org_sm">
                                    <input type="hidden" name="amount" value="{{ $package_price }}">
                                    <h5>Total</h5>
                                    {{-- £ --}}
                                    <h5 class="dis_price">  $ {{$package_price}} </h5>
                                </div>

                            </div>
                            <div class="payment_order_frm">
                                <ul class="_list_payment">
                                    <li id="paypal_482_item">
                                        <input type="radio" name="payment_method" id="_paypal_343" value="1"
                                            class="_paypal_radio_3423">
                                        <label for="_paypal_343">
                                            Paypal
                                            <img src="{{asset('/assets/paypal.svg')}}" alt="paypal" width="30">
                                        </label>
                                    </li>
                                    <li id="_debit_card_item">
                                        <input type="radio" name="payment_method" id="_debit_card"
                                            class="_paypal_radio_3423" value="0">
                                        <label for="_debit_card">
                                            Debit & Credit Cards
                                        </label>
                                    </li>
                                </ul>
                                <p>
                                    Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our <a href="">
                                        Privacy policy</a>.
                                </p>
                                <button type="submit" id="_paypal_btn" class="_4288_paypal_btn">
                                    <img src="{{asset('assets/_btn_ico.svg')}}" alt="paypal" width="90">
                                </button>
                                <button type="submit" class="_387_debit_pay" id="_debit_8327_card">
                                    Pay With $ {{$package_price}}
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <script async defer src="{{asset('js/checkout.js')}}"></script>
    <x-footer />

</body>

</html>