<?php

/**
 * TODO: 
 * 
 */

namespace App;

use App\Utils\GetMeParams;


class Router
{

    public array $getRoutes = [];
    public array $postRoutes = [];

    public array $params = [];
    public ?Database $database = null;

    public function __construct(Database $database)
    {

        $this->database = $database;
    }

    public function get($url, $fn)
    {
        // print_r($url);
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {

        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $url = $_SERVER['REQUEST_URI'] ?? '/';
        $params = new GetMeParams();
        $params->getParams('users/:id');
        // print_r($url);
        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }
        if (!$fn) {
            echo 'Page not found';
            exit;
        }
        echo call_user_func($fn, $this);
    }

    public function renderView($view, $params = [])
    {
        $popup = false;
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        print_r($massage);

        if (isset($massage)) {
            $popup = true;
        }
        ob_start();
        // include __DIR__ . "/views/templates/head.php";
        include __DIR__ . "/views/$view.php";
        include __DIR__ . "/views/templates/popup.php";
        // include __DIR__ . "/views/templates/footer.php";
        $content = ob_get_clean();
        ob_end_clean();
        if (strpos($view, "admin") !== false)
            include __DIR__ . "/views/_adminLayout.php";
        else
            include __DIR__ . "/views/_layout.php";
    }
}