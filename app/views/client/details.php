<!-- here the header -->
<?php print_r($book);
$details = array(
    'رقم الصنف' => $book->category_id,
    'رقم المنتج' => $book->id,
    'المؤلف ' => $book->author_id,
    'الناشر' => $book->publisher_id,
    'تاريخ النشر' => $book->publisher_id,
    '  عدد الصفحات' => $book->page_number,
)
?>
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


    <main class="container">
        <section class="details_path my-1">
            <div class="color-blue">الرئسيه / الكتب العربية / الكتب الاكترونية ؟ لانك الله</div>
        </section>
        <section>
            <!-- top section of the details -->
            <div class=" details_detail flex-row justify_content_center">
                <!-- here the image saction -->
                <div class="book_image  ">
                    <div class="book_warpper  flex-col">
                        <div class="book_big_image book rounded-5">
                            <img src="../assets/images/465531.jpg" alt="">
                        </div>
                        <div class="books_details_list">
                            <div class="book_gallary book active">
                                <img src="../assets/images/465531.jpg" alt="">
                            </div>
                            <div class="book_gallary book">
                                <img src="../assets/images/508688.jpg" alt="">
                            </div>
                            <div class="book_gallary book">
                                <img src="../assets/images/514575.jpg" alt="">
                            </div>
                            <div class="book_gallary book">
                                <img src="../assets/images/578420.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- here the information of the book -->
                <div class="book_info">
                    <div class=" row book_title">
                        <h2> <?php echo $book->title ?> (<?php echo $book->format ?> )</h2>
                        <p class="more color-blue">عرض المزيد</p>
                        <h3 class="book_info_price color-red">.<?php echo $book->price ?> ر.ي
                            <p class="color-gray font-14">شامل الضريبه</p>
                        </h3>
                    </div>
                    <div class="row book_view ">
                        <div class="starts flex-row ">
                            <p class="color-gray">وحده البيع جميع</p>
                            <small class="color-blue"></small>
                            <ul class="rate flex-row">
                                <li>
                                    <img src="../assets/svgs/star.svg" alt="">
                                </li>
                                <li>
                                    <img src="../assets/svgs/star.svg" alt="">
                                </li>
                                <li>
                                    <img src="../assets/svgs/star.svg" alt="">
                                </li>
                                <li>
                                    <img src="../assets/svgs/star.svg" alt="">
                                </li>
                                <li>
                                    <img src="../assets/svgs/star.svg" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="number_books">
                            رقم الصنف 1212323
                        </div>
                    </div>
                    <div class="row book_options ">
                        <div class="optiona_list flex-row">
                            <div class="option_title flex-row">
                                <label class="radio_botton">
                                    <input type="radio" name="option" id="">
                                </label>
                                <p>كتاب الكتروني</p>
                            </div>
                            <div class="option_price">
                                <h3 class="book_info_price color-red">
                                    12.99 ر.ي
                                    <p class="color-gray font-14">شامل الضريبه</p>
                                </h3>
                            </div>
                        </div>
                        <div class=" optiona_list flex-row">
                            <div class="option_title flex-row">
                                <label class="radio_botton">
                                    <input type="radio" name="option" id="">
                                </label>
                                <p>كتاب الكتروني</p>
                            </div>
                            <div class="option_price">
                                <h3 class="book_info_price color-red">
                                    12.99 ر.ي
                                    <p class="color-gray font-14">شامل الضريبه</p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- here the book addtoinal books -->
                <div class="book_additional_info">
                    <div class="note">
                        <p><span class="font-bold">ملاحظه:</span>
                            <span>سيتم أضافه هذت الكتاب الالكتروني الى مكتبتك في قارئ جرير </span>
                        </p>
                        <p class="color-blue font-14">اقرا المزيد</p>
                    </div>
                    <div class="cart_adding row flex-row">
                        <div class="btn mx-1 rounded-5 bg-gray flex-center">
                            <span>1</span>
                            <span class="w-15 mx-1">
                                <img class="" src="../assets/svgs/arrow-down.svg" />
                            </span>
                        </div>
                        <a href='./cart' class="btn flex-1 bg-red flex-row flex-center rounded-5 color-white">
                            <span class="w-15"><img src="../assets/svgs/white-card-without-circule.svg" /></span>
                            <span class="font-bold">أضف الى السله</span>
                        </a>
                    </div>
                    <div class="payment_services row flex-row bg-gray rounded-5 p-1">
                        <p class="flex-1 flex-row flex-center">
                            <span class="w-15">
                                <img src="../assets/svgs/security.svg" />
                            </span>
                            <span>
                                تسوق أمن
                            </span>
                        </p>
                        <p class="flex-1 flex-row flex-center">
                            <span class="w-15">
                                <img src="../assets/svgs/security.svg" />
                            </span>
                            <span>
                                تسوق أمن
                            </span>
                        </p>
                        <p class="flex-1 flex-row flex-center">
                            <span class="w-15">
                                <img src="../assets/svgs/security.svg" />
                            </span>
                            <span>
                                تسوق أمن
                            </span>
                        </p>
                    </div>
                    <div class="share_btns row flex-row justify_content_around p-1">
                        <div class="btn flex-row flex-center">
                            <span class="w-15 ml-1">
                                <img src="../assets/svgs/share.svg" alt="">
                            </span>
                            <span>
                                مشاركه
                            </span>
                        </div>
                        <div class="btn flex-row flex-center">
                            <span class="w-15 ml-1">
                                <img src="../assets/svgs/share.svg" alt="">
                            </span>
                            <span>
                                مفضله
                            </span>
                        </div>
                        <div class="btn flex-row flex-center ml-1">
                            <span class="w-15 ml-1">
                                <img src="../assets/svgs/share.svg" alt="">
                            </span>
                            <span>
                                مقارنه
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-1 bg-gray ">
                <h6 class=" color-gray ">
                    كتاب يتحدث على بعض أسماء الله الحسنى وكيف نعيشها في حياتنا حرص تامؤلف أن يكونالكتاب لمن هم
                    متوسطي ويكون مناسب للمحتاج
                </h6>
            </div>
            <!-- the requirment section -->
            <div class="row mx-1 ">
                <h2>مواصفات</h2>

                <!-- tablr -->
                <div class="m-1 row " id='required-table'>
                    <!-- fetch the requirement from the js -->
                    <?php foreach ($details as $key => $data) {
                    ?>
                    <div class="table-row flex-row p-1 py-2 border-b-1 border-gray">
                        <p class=""><?php echo $key ?></p>
                        <p class="mx-6 font-bold"><?php echo $data ?></p>
                    </div>
                    <?php    } ?>
                </div>
            </div>

            <!-- here the comment setion -->
            <div class="row py-2">

                <div class="flex-row">
                    <h1 class="mx-1">
                        مراجعه العملاء
                    </h1>
                    <button class="flex-row flex-center btn px-1  py-5px color-white rounded-5 bg-blue">
                        <span class="font-bold mx-1 font-24 flex-row justify_content_around">
                            +
                        </span>
                        اكتب مراجعتك
                    </button>
                </div>
                <div id="comments" class="row">
                    <!-- HERE fetch from the required js -->
                </div>
            </div>

            <!-- here the products section -->
            <div class="row">
                <div class="products_row_title flex-row justify_content_between">
                    <h2> منتجات مشابهه</h2>

                </div>
                <div class="products_row_content slider_col">
                    <div class="slider_col_warrper">
                        <ul id='product_list' class="products_list slider_list ">

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
</header>


<script src="./js/search.js"></script>
<script type='module' src="./js/required.js"></script>