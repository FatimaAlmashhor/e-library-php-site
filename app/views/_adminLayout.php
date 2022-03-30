<!DOCTYPE html>



























<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/adminAssests/" data-template="vertical-menu-template-semi-dark">

  
<!--  , Sat, 26 Mar 2022 16:44:24 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - CRM | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    <link href="/../dist/tailwind.css" rel="stylesheet" type="text/css" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/adminAssests/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/adminAssests/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/adminAssests/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/adminAssests/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/adminAssests/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/adminAssests/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/adminAssests/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/adminAssests/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/adminAssests/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="/adminAssests/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/adminAssests/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="/adminAssests/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="/adminAssests/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="/adminAssests/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
<link rel="stylesheet" href="/adminAssests/vendor/libs/tagify/tagify.css" />
<link rel="stylesheet" href="/adminAssests/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="/adminAssests/vendor/libs/typeahead-js/typeahead.css" />  
<!-- Page CSS -->

    <!-- Helpers -->
    <script src="/adminAssests/vendor/js/helpers.js"></script>
    <script src="/adminAssests/vendor/js/bootstrap.js"></script>
    <script src="/adminAssests/vendor/libs/jquery/jquery.js"></script>
    <script src="/adminAssests/vendor/libs/popper/popper.js"></script>
    
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/adminAssests/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/adminAssests/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body class="relative">

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->

            <?php include_once __DIR__ . '/templates/adminAside.php' ?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">


                <!-- Navbar -->

                <?php include __DIR__ . '/templates/adminNav.php' ?>



                <!-- / Navbar -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- content  -->
                        <?php
                        echo $content; ?>


                    </div>


                </div>

                <!-- /content -->
            </div>

        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->


    <script src="/adminAssests/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/adminAssests/vendor/libs/hammer/hammer.js"></script>
    <script src="/adminAssests/vendor/libs/i18n/i18n.js"></script>
    <script src="/adminAssests/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="/adminAssests/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/adminAssests/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/adminAssests/js/main.js"></script>

    <!-- Page JS -->
    <script src="/adminAssests/js/dashboards-crm.js"></script>

</body>

</html>