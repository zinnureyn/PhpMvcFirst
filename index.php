<?php

spl_autoload_register(function ($className) {
    $dir=__DIR__ . '/libs/';
    $dosyayolu=$dir.$className.'.php';
    include ($dosyayolu);
});

$boots = new boots();


?>


