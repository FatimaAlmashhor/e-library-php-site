<!-- here the header -->
<header>
    <div class="header-warrper container">
        <a href='./' class="logo">
            <img src="../assets/images/img.png" alt="">
        </a>
        <div dir='rtl' class="search">
            <input id='search_input' type="text" placeholder="البحث" />
            <button id='search_btn'><span>
                    <img src="../assets/svgs/search.svg" />
                </span></button>
        </div>
        <a class="cart flex-col flex-center" href="../pages/cart.html">
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
                <img src="../assets/images/MB-ksa-1001-b2s-2022-banners-ar1.jpg" />
            </div>
            <div class="slider_img">
                <img src="../assets/images/MB-ksa-1201-samsung_s21fe_5g_trade_in-ar1.jpg" />
            </div>
            <div class="slider_img">
                <img src="../assets/images/MB-ksa-190122-hp-250-g7-laptops-ar.jpg" />
            </div>
            <div class="slider_img">
                <img src="../assets/images/MB-ksa-240122-huawei-p50-pro-cs-ar.jpg" />
            </div>


            <!-- <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> -->
        </div>
        <div class="slider_arrows" dir="rtl">
            <div class="arrow_left" dir="rtl">
                <span class="arrow_svg"><img src="../assets/svgs/left-arrow.svg" alt=""></span>
            </div>
            <div class="arrow_right" dir="rtl">
                <span class="arrow_svg"><img src="../assets/svgs/right-arrow.svg" alt=""></span>
            </div>
        </div>
    </div>

    <main>
        <section class=" w-full flex-col row  container">
            <div class=" w-full flex-col ">
                <!-- top section path / orders -->
                <div>
                    <p class="color-blue">الرئسية / الكتب العربيه / كتب الكترونيه </p>
                </div>
                <!-- type of books / orders  -->
                <div class="flex-row justify_content_between w-full px-1 container ">
                    <div class="flex-row mx-1 py-1 px-1 border-1 border-green rounded-5 my-1 ">
                        <span class="w-20 mx-1">
                            <img src='../assets/svgs/arabic books.svg' />
                        </span>
                        <h3 class="color-green font-bold ">كتاب ألكتروني</h3>
                    </div>
                    <div class=" flex-row my-1 align_self_end  ">
                        <div class="flex-row">
                            <p>الترتيب بحسب :</p>
                            <div>
                                <!-- drop down -->
                                <select class="dropdown">
                                    <option>الرجاء الاختيار ...</option>
                                    <option>الوقت</option>
                                    <option>السعر</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- the saprated sections -->
                <div class=" cat_section  ">
                    <!-- right section -->
                    <div class="filter_section row mx-1  p-1 ">
                        <div class=" mx-auto w-full">
                            <!-- the filter part -->
                            <div class="collap">
                                <div class="collaps_header  bg-green ">
                                    <p class="color-white">
                                        تصفيه النتائج
                                    </p>
                                </div>
                                <div class="collaps_content">
                                    <div class="collaps_item">
                                        <div class="collaps_item_header flex-row justify_content_between w-full">
                                            <p> علامه تجاريه </p>
                                            <span class="collaps_icon" data-type='squire'> - </span>
                                        </div>
                                        <div class="collaps_item_body">
                                            <div class="p-1">
                                                something
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collaps_item">
                                        <div class="collaps_item_header flex-row justify_content_between w-full">
                                            <p> علامه تجاريه </p>
                                            <span class="collaps_icon" data-type='squire'> - </span>
                                        </div>
                                        <div class="collaps_item_body">
                                            <div class="p-1">
                                                <input type="range" value="10" />
                                                <span>ر.ي</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collaps_item">
                                        <div class="collaps_item_header flex-row justify_content_between w-full">
                                            <p> علامه تجاريه </p>
                                            <span class="collaps_icon" data-type='squire'> - </span>
                                        </div>
                                        <div class="collaps_item_body">
                                            <div class="p-1">
                                                something
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- the left section -->
                    <div class="products_row_content flex-1  ">
                        <!-- the orders section -->


                        <!-- products section -->
                        <div class="slider_col_warrper">
                            <ul id='product_list' class=" flex-row flex-center ">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</header>


<script src="./js/search.js"></script>
<script src="./js/collaps.js"></script>