<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./app/dist/css/main.css">
    <title>E-book</title>
    <!-- <base href="http://localhost/">  -->

</head>

<body class="">
    <nav class="">
        <ul class="nav-list  container">
            <li class=" flex-row flex-center login-btn">
                <i class="nav_icon"><img src="./assets/svgs/svgexport-5.svg" /></i>
                <span>أدخل لحسابك اوسجل الان </span>
            </li>
            <li>
                <a href='./index.html'>
                    <i class="nav_icon"><img src="./assets/svgs/star.svg" /></i>
                    <span> الرئسية </span>
                </a>
            </li>
            <li>
                <a href=''>
                    <i class="nav_icon"><img src="./assets/svgs/delivery.svg" /></i>
                    <span>من نحن </span>
                </a>
            </li>
            <li>
                <a href=''>
                    <i class="nav_icon"><img src="./assets/svgs/security.svg" /></i>
                    <span>اتصل بنا </span>
                </a>
            </li>
            <li>
                <a href=''>
                    <i class="nav_icon"><img src="./assets/svgs/help.svg" /></i>
                    <span> المساعدة </span>
                </a>
            </li>
            <li>
                <a href=''>
                    <i class="nav_icon"><img src="./assets/svgs/location.svg" /></i>
                    <span> سيايسه الخصوصيه </span>
                </a>
            </li>
            <li>
                <a href=''>
                    <i class=""></i>
                    <span> اليمن </span>
                </a>
            </li>

            <li id='switch_lang' class="flex-row flex-center">
                <i class="nav_icon"><img src="./assets/svgs/langs.svg" /></i>
                <span> English </span>
            </li>

        </ul>
        <div id='humburger' class="  humbrger">
            <div class="w-20 ">
                <img src="./assets/svgs/humbarger.svg" alt="">
            </div>
        </div>
    </nav>

    <header>
        <div class="header-warrper container header_top ">
            <a href='./index.html' class="logo">
                <img src="./assets/images/img.png" alt="">
            </a>
            <div dir='rtl' class="search">
                <input id='search_input' type="text" placeholder="البحث" />
                <button id='search_btn'><span>
                        <img src="./assets/svgs/search.svg" />
                    </span></button>
            </div>
            <a class="cart flex-col flex-center" href="./pages/cart.html">
                <span id='cart-counter'>0</span>
            </a>
        </div>
        <div class="slider">
            <ul class="slider-dots">
                <li class="dot active"></li>
                <li class="dot "></li>
                <li class="dot "></li>
                <li class="dot "></li>
            </ul>
            <div class="slider_warrper" dir="rtl">
                <div class="slider_img">
                    <img src="./assets/images/MB-ksa-1001-b2s-2022-banners-ar1.jpg" />
                </div>
                <div class="slider_img">
                    <img src="./assets/images/MB-ksa-1201-samsung_s21fe_5g_trade_in-ar1.jpg" />
                </div>
                <div class="slider_img">
                    <img src="./assets/images/MB-ksa-190122-hp-250-g7-laptops-ar.jpg" />
                </div>
                <div class="slider_img">
                    <img src="./assets/images/MB-ksa-240122-huawei-p50-pro-cs-ar.jpg" />
                </div>


                <!-- <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> -->
            </div>
            <div class="slider_arrows" dir="rtl">
                <div class="arrow_left" dir="rtl">
                    <span class="arrow_svg"><img src="./assets/svgs/left-arrow.svg" alt=""></span>
                </div>
                <div class="arrow_right" dir="rtl">
                    <span class="arrow_svg"><img src="./assets/svgs/right-arrow.svg" alt=""></span>
                </div>
            </div>
        </div>

        <main class="flex-col">
            <!-- like this cll the pages -->
            <section class="section section_cates container">
                <div class="products_row_title flex-row justify_content_between">
                    <h2>تسوق بالاقسام</h2>
                </div>
                <div class="slider_col">
                    <div class="left">
                        <img src="./assets/svgs/right-arrow.svg" alt="">
                    </div>
                    <div class="slider_col_warrper">
                        <ul class="cates_list slider_list ">
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/devices.svg" />
                                </span>
                                <p class="font-bold ">دين</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/books.svg" />
                                </span>
                                <p class="font-bold ">تاريخ</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/arabic books.svg" />
                                </span>
                                <p class="font-bold ">روايات</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/came.svg" />
                                </span>
                                <p class="font-bold ">سياسه</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/edit.svg" />
                                </span>
                                <p class="font-bold ">سياسه</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/wifi.svg" />
                                </span>
                                <p class="font-bold ">سياسه</p>
                            </li>
                            <li class="cat flex-col flex-center">
                                <span class="w-30">
                                    <img src="./assets/svgs/watch.svg" />
                                </span>
                                <p class="font-bold ">سياسه</p>
                            </li>

                        </ul>

                    </div>
                    <div class="right">
                        <img src="./assets/svgs/left-arrow.svg" alt="">
                    </div>
                </div>
            </section>
            <section class="section section_advir container">
                <div class="section_advir_top ">
                    <ul class="grid-col-4 ">
                        <li><img src="./assets/images/FP-ksa-1201-macbook-pro-ar.webp"></li>
                        <li><img src="./assets/images/FP-ksa-1201-moto-edge-20-ar.webp"></li>
                        <li><img src="./assets/images/FP-ksa-1201-s21-fe-ar.webp"></li>
                        <li><img src="./assets/images/FP-ksa-1201-smart-tv-ar.webp"></li>
                    </ul>
                </div>
                <div class="section_advir_bottom row">
                    <img src="./assets/images/ev-ksa-0212-installment-service-ar2.webp">
                </div>
            </section>
            <section class="section section_products container">
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2>العروض الحاليه</h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col ">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul id='products_list' class="products_list slider_list ">
                                <li class="product">
                                    <span class=" discount flex-row justify_content_between font-14">
                                        <!-- <span  class="font-bold">OFF</span> -->
                                        <span dir="rtl" class="count-down"> </span>
                                    </span>
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <span class=" discount flex-row justify_content_between font-14">
                                        <!-- <span  class="font-bold">OFF</span> -->
                                        <span dir="rtl" class="count-down"> </span>
                                    </span>
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/496319.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <span class=" discount flex-row justify_content_between font-14">
                                        <!-- <span  class="font-bold">OFF</span> -->
                                        <span dir="rtl" class="count-down"> </span>
                                    </span>
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <span class=" discount flex-row justify_content_between font-14">
                                        <!-- <span  class="font-bold">OFF</span> -->
                                        <span dir="rtl" class="count-down"> </span>
                                    </span>
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <span class=" discount flex-row justify_content_between font-14">
                                        <!-- <span  class="font-bold">OFF</span> -->
                                        <span dir="rtl" class="count-down"> </span>
                                    </span>
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/504021.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2>الكتب الدنيه</h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/496319.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/504021.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2>الكتب التاريخية </h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/561080.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/578420.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2>الكتب السياسية </h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/561080.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/578420.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2>الكتب الاقتصادية </h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/561080.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/578420.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2> الطبخ </h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/561080.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/578420.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="products_row">
                    <div class="products_row_title flex-row justify_content_between">
                        <h2> أفضل الروايات الرومنسية </h2>
                        <a href="./pages/category.html" class="view-all color-blue font-14">
                            عرض الكل
                        </a>
                    </div>
                    <div class="products_row_content slider_col">
                        <div class="left">
                            <img src="./assets/svgs/right-arrow.svg" alt="">
                        </div>
                        <div class="slider_col_warrper">
                            <ul class="products_list slider_list ">
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/465531.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/508688.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/514575.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/561080.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product_warpper flex-col">
                                        <a href="./pages/details.html">
                                            <div class="product_img">
                                                <img src="./assets/images/578420.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="product_content">
                                            <a href="./pages/details.html">
                                                <div class="product_name">
                                                    <h4 class="">كتاب التروني</h4>
                                                    <!-- <p>something</p> -->
                                                </div>
                                                <div class="product_price color-red">
                                                    <h3 class="font-bold">19.99<small>ر.ي</small></h3>
                                                    <p class="font-12 color-gray">شامل الضريبه</p>
                                                </div>
                                            </a>
                                            <!-- <div class="product_more-info">
                          inforamtion
                        </div> -->
                                            <div class="product_interactive flex-row  justify_content_around ">
                                                <span class="w-20  flex-center ">
                                                    <img src="./assets/svgs/star.svg" />
                                                </span>
                                                <span class=" w-20 cart_icon adding-cart">
                                                    <img src="./assets/svgs/white-card.svg" />
                                                </span>
                                                <span class="w-20">
                                                    <img src="./assets/svgs/two-arrow.svg" />
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="./assets/svgs/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div>

            </section>
        </main>
    </header>
    <footer>
        <div class="footer-warpper ">
            <!-- dark footer -->
            <div class="footer_top container ">
                <div class="footer_top_content flex-row justify_content_between">
                    <div class="footer_col">
                        <div class="footer_col_title">
                            انضم الى نشرتنا البريديه
                        </div>
                        <div class="footer_col_content">
                            <form action="" class="join-us-from">
                                <input type="text" name="" id="" placeholder="ادخل بريدك الاكتروني " />
                                <button>اشتراك</button>
                            </form>
                        </div>
                    </div>
                    <div class="footer_col">
                        <div class="footer_col_title">
                            انضم الى نشرتنا البريديه
                        </div>
                        <div class="footer_col_content">
                            <ul>
                                <li> مبيعات الشركات</li>
                                <li> الاسأله المتكرره</li>
                                <li> دليل التسويق والمطبوعات</li>
                                <li>موقع المعارض</li>
                                <li>سيايسة الصمان </li>
                                <li>سياسيه الاستبدال</li>
                                <li>اتصل بنا </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_col">
                        <div class="footer_col_title">
                            انضم الى نشرتنا البريديه
                        </div>
                        <div class="footer_col_content">
                            <ul>
                                <li> مبيعات الشركات</li>
                                <li> الاسأله المتكرره</li>
                                <li> دليل التسويق والمطبوعات</li>
                                <li>موقع المعارض</li>
                                <li>سيايسة الصمان </li>
                                <li>سياسيه الاستبدال</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_col">
                        <div class="footer_col_title">
                            انضم الى نشرتنا البريديه
                        </div>
                        <div class="footer_col_content">
                            <ul>
                                <li> مبيعات الشركات</li>
                                <li> الاسأله المتكرره</li>
                                <li> دليل التسويق والمطبوعات</li>
                                <li>موقع المعارض</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_col">
                        <div class="footer_col_title">
                            انضم الى نشرتنا البريديه
                        </div>
                        <div class="footer_col_content">
                            <ul>
                                <li> مبيعات الشركات</li>
                                <li> الاسأله المتكرره</li>
                                <li> دليل التسويق والمطبوعات</li>
                                <li>موقع المعارض</li>
                                <li>موقع المعارض</li>
                                <li>موقع المعارض</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer_top_social">
                    <div class="footer_col">
                        <div class="footer_col_title">
                            تواصل معنا
                        </div>
                        <div class=" socail_items">
                            <ul class="flex-row">
                                <li class="socail_item"><img src="./assets/svgs/facebook.svg" /></li>
                                <li class="socail_item"><img src="./assets/svgs/twitter.svg" /></li>
                                <li class="socail_item"><img src="./assets/svgs/tiktok.svg" /></li>
                                <li class="socail_item"><img src="./assets/svgs/linkedin.svg" /></li>
                                <li class="socail_item"><img src="./assets/svgs/insta.svg" /></li>
                                <li class="socail_item"><img src="./assets/svgs/snap.svg" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lighter footer -->
            <div class="footer_bottom ">
                <div class="footer_bottom_container container  flex-row justify_content_between">
                    <div class="bottom_footer_left ">
                        <ul class="payment_carts flex-row justify_content_between">
                            <li class=""><img src="./assets/svgs/master can.svg" /></li>
                            <li class=""><img src="./assets/svgs/mastercard.svg" /></li>
                            <li class=""><img src="./assets/svgs/ktaf.svg" /></li>
                            <li class=""><img src="./assets/svgs/pay.svg" /></li>
                            <li class=""><img src="./assets/svgs/visa.svg" /></li>

                        </ul>
                    </div>
                    <div class="bottom_footer_right">
                        <small>سياسيه الخصوصيه | شروط الخدمه</small>
                        <small>جميع الحقوق محفوظه لمتكبه جرير بس التطوير ل فاطمه امين :)</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="modal" class="flex-center hidden">
        <div class="modal_warpper">
            <div class="modal_header">
                <p class="close" id='close_modal'>
                    <img src='./assets/svgs/close.svg' alt="close" />
                </p>
            </div>
            <div class="modal_content">
                <div id='login' class="login_section flex-col hidden">
                    <div class="login_warpper">
                        <div class="form_header">
                            <h3>تسجيل الدخول</h3>
                        </div>
                        <form class="form_content form">
                            <label class="input rounded-5">
                                <input type="text" placeholder="الايميل او رقم الجوال">
                            </label>
                            <label class="input rounded-5">
                                <div class="flex-row ">
                                    <input type="text" placeholder="كلمه المرور">
                                    <span class="forgot color-blue">نسيت</span>
                                </div>
                            </label>
                            <button class="btn w-full form-btn bg-red color-white rounded-5">تسجيل الدخول</button>
                        </form>
                        <div class="regiter_links flex-col">
                            <button id='create_account' class="color-gray"> ليس لديك حساب ؟</button>
                            <button class="btn  bg-white rounded-5 color-gray mt-1">أنشاء حساب جديد</button>
                        </div>
                    </div>
                </div>
                <div id="register" class="login_section flex-col hidden">
                    <div class="login_warpper">
                        <div class="form_header">
                            <h3> أنشاء حساب</h3>
                        </div>
                        <form class="form_content form">
                            <div class="flex-row justify_content_between">
                                <div class="w-full  ml-1 flex-1">
                                    <label class="input rounded-5 inline">
                                        <input type="phone" placeholder="  رقم الجوال">
                                    </label>
                                </div>
                                <div class="">
                                    <label class="input rounded-5">
                                        <input type="number" placeholder="  رمز البلد ">
                                    </label>
                                </div>
                            </div>
                            <button class="btn w-full form-btn bg-gray rounded-5 color-gray"> أرسال رمز التحقق</button>
                            <label class="input rounded-5">
                                <input type="text" placeholder=" اسم الاول">
                            </label>
                            <label class="input rounded-5">
                                <input type="text" placeholder=" اسم العائله">
                            </label>
                            <label class="input rounded-5">
                                <input type="email" placeholder="  البريد الاكتروني">
                            </label>
                            <label class="input rounded-5">
                                <input type="password" placeholder=" كلمه المرور ">
                            </label>
                            <label class="checkbox rounded-5 ">
                                <input type="checkbox">
                                <span class="color-gray">أوافق على <a href="#" class="color-blue">الشروط والاوحكام</a>
                                </span>
                            </label>
                            <label class="checkbox rounded-5 ">
                                <input type="checkbox">
                                <span class="color-gray"> لانضمام للنشره البريديه</span>
                            </label>
                            <button class="btn w-full form-btn bg-gray color-gray rounded-5">انشاء حساب </button>
                        </form>
                        <div class="regiter_links flex-col">
                            <p class="color-gray"> ليس لديك حساب ؟ <a id='login_in_existing_account' class="color-blue"
                                    href="#">تسجيل الدخول</a></p>
                        </div>
                    </div>
                </div>
                <div id='image-gallery' class='hidden'>
                    <div class="arraws hidden">
                        <img id='left' src="../assets/svgs/left-arrow.svg" alt="">
                        <img id='right' src="../assets/svgs/right-arrow.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./app/dist/js/modal.js"></script>
    <!-- <script  src="./src/js/search.js"></script> -->
    <script src="./app/dist/js/cart.js"></script>
    <script src="./app/dist/js/mainSlider.js"></script>
    <script src="./app/dist/js/carousel.js"></script>
    <script src="./app/dist/js/toggleLangs.js"></script>
    <script src="./app/dist/js/nav.js"></script>
    <script src="./app/dist/js/countdown.js"></script>
    <script>
    const header = document.querySelector('.header-warrper');
    window.addEventListener('scroll', () => {

        window.scrollY === 0 ? header.classList.add('header_top') : header.classList.remove('header_top')
    })
    </script>
</body>

</html>