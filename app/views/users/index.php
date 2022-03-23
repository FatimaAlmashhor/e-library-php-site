<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app/dist/css/tailwind.css">
    <title>Users</title>
</head>

<body>
    <button class="" id='login_btn' onclick="show_model('show_register_model')">
        Register
    </button>
    <?php require __DIR__  . "/../register.php" ?>
    <h1>Here all the users</h1>
    <script>
    function show_model(id) {
        const model = document.getElementById(
            id);
        model.style.display = 'flex';
    }

    function hide_model(id) {
        const model = document.getElementById(
            id);
        model.style.display = 'none';
    }


    // function showHint(str) {
    //     console.log('test')
    //     if (str.length == 0) {

    //         return;
    //     } else {
    //         var xmlhttp = new XMLHttpRequest();
    //         xmlhttp.onreadystatechange = function() {
    //             if (this.readyState == 4 && this.status == 200) {
    //                 v.innerHTML = this.responseText;
    //             }
    //         };
    //         xmlhttp.open("GET", "./", true);
    //         xmlhttp.send();
    //     }
    // }
    </script>
</body>

</html>