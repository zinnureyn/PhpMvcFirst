<?php
class boots{

    function __construct(){
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url=rtrim($url,"/");
        $url=explode("/", $url);

//print_r($url) ;
        if (empty($url[0])):
            require "controllers/ana.php";
            $controller = new ana();
            endif;



        $file = "controllers/" . $url[0] . ".php";//controllers/ana.php

        if (file_exists($file)):
            require $file;
            $controller = new $url[0];
        else:
            require "controllers/error.php";
            $hata = new hata();

        endif;



        if (isset($url[2])):
            $controller->{$url[1]}($url[2]);//index($url[2])

        else:
            if (isset($url[1])):
                $controller->{$url[1]}();//index()
            endif;
        endif;


    }
}









?>
