<?php

spl_autoload_register(function ($className) {
    $dir=__DIR__ . '/libs/';
    $dosyayolu=$dir.$className.'.php';
    include ($dosyayolu);
});
require "config/genel.php";
require "config/database.php";
$boots = new boots();


?>


