<?php
class View
{
    function __construct()
    {
        //echo "Görsel<br>" ;

    }
    public function goster($dosyaad){
        require 'views/'.$dosyaad.'.php';
    }

}



?>
