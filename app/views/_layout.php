<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./public/css/main.css" rel="stylesheet" type="text/css" />
    <title>Products CRUD</title>
</head>

<body>

    <?php echo $content ?>

    <script src="./public/js/modal.js"></script>
    <!-- <script  src="./src/js/search.js"></script> -->
    <script src="./public/js/cart.js"></script>
    <script src="./public/js/mainSlider.js"></script>
    <script src="./public/js/carousel.js"></script>
    <script src="./public/js/toggleLangs.js"></script>
    <script src="./public/js/nav.js"></script>
    <script src="./public/js/countdown.js"></script>
    <script>
    const header = document.querySelector('.header-warrper');
    window.addEventListener('scroll', () => {

        window.scrollY === 0 ? header.classList.add('header_top') : header.classList.remove('header_top')
    })
    </script>
</body>

</html>