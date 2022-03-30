<?php print_r($books) ?>

<header>
    <div class="header-warrper container header_top ">
        <a href='./' class="logo">
            <img src="./assets/images/img.png" alt="">
        </a>
        <div dir='rtl' class="search">
            <input id='search_input' type="text" placeholder="البحث" />
            <button id='search_btn'><span>
                    <img src="./assets/svgs/search.svg" />
                </span></button>
        </div>
        <a class="cart flex-col flex-center" href="./cart">
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
                        <?php foreach ($categories as $category) { ?>
                        <li class="cat flex-col flex-center">
                            <span class="w-30">
                                <img src="./assets/svgs/devices.svg" />
                            </span>
                            <p class="font-bold "><?php echo $category->name ?></p>
                        </li>
                        <?php } ?>
                        <!-- <li class="cat flex-col flex-center">
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
                        </li> -->

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
                    <a href="./category" class="view-all color-blue font-14">
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
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/465531.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
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
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/496319.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
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
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/514575.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
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
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/508688.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
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
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/504021.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
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
            <?php foreach ($categories as $category) {
            ?>
            <div class="products_row">
                <div class="products_row_title flex-row justify_content_between">
                    <h2><?php echo $category->name ?></h2>
                    <a href="./category" class="view-all color-blue font-14">
                        عرض الكل
                    </a>
                </div>
                <div class="products_row_content slider_col">
                    <div class="left">
                        <img src="./assets/svgs/right-arrow.svg" alt="">
                    </div>
                    <div class="slider_col_warrper">
                        <ul class="products_list slider_list ">
                            <?php
                                foreach ($books[$category->id] as $book) {

                                ?>

                            <li class="product">
                                <div class="product_warpper flex-col">
                                    <a href="./details">
                                        <div class="product_img">
                                            <img src="./assets/images/465531.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product_content">
                                        <a href="./details">
                                            <div class="product_name">
                                                <h4 class=""> <?php echo $book->title ?></h4>
                                                <!-- <p>something</p> -->
                                            </div>
                                            <div class="product_price color-red">
                                                <h3 class="font-bold"><?php echo $book->price ?><small>ر.ي</small></h3>
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

                            <?php
                                }
                                ?>

                        </ul>
                    </div>
                    <div class="right">
                        <img src="./assets/svgs/left-arrow.svg" alt="">
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


        </section>
    </main>
</header>