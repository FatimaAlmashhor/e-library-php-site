<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./dist/tailwind.css" rel="stylesheet" type="text/css" />
    <link href="./css/main.css" rel="stylesheet" type="text/css" />
    <title>Products CRUD</title>
</head>

<body>

    <?php
    include __DIR__ . "/../views/templates/nav.php";
    echo $content; ?>
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

    <!-- model  -->


    <div id="modal" class="flex-center hidden">
        <div class="modal_warpper">
            <div class="modal_header">
                <p class="close" id='close_modal'>
                    <img src='./assets/svgs/close.svg' alt="close" />
                </p>
            </div>
            <div class="modal_content">

                <?php include_once __DIR__ . "./client/login.php" ?>
                <?php include_once __DIR__ . "./client/register.php" ?>
                <div id='image-gallery' class='hidden'>
                    <div class="arraws hidden">
                        <img id='left' src="../assets/svgs/left-arrow.svg" alt="">
                        <img id='right' src="../assets/svgs/right-arrow.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type='module' src="./js/modal.js"></script>
    <!-- <script  src="./src/js/search.js"></script> -->
    <script type='module' src="./js/cart.js"></script>
    <script type='module' src="./js/mainSlider.js"></script>
    <script type='module' src="./js/carousel.js"></script>
    <script type='module' src="./js/toggleLangs.js"></script>
    <script type='module' src="./js/nav.js"></script>
    <script type='module' src="./js/countdown.js"></script>


</body>

</html>