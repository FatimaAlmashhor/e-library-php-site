<?php

namespace App\Utils;

class GetMeParams
{
    function getParams($url)
    {
        $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($url)) . "$@D";
        $result =  preg_match($pattern, $url, $matches);

        print_r($matches);
        // print_r($_SERVER['REQUEST_URI']);

        // $final_param = array_combine($params[1] , );
    }
}