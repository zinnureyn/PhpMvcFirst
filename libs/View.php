<?php
class View
{
    function __construct()
    {
        //echo "Görsel<br>" ;

    }
    public function goster($dosyaad,$data=null){
        require 'views/'.$dosyaad.'.php';
    }

}



?>
