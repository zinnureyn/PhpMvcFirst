<?php

class ayar extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "Ayar sınıfı çağrıldı<br>" ;
    }
    public function index($id=false)
    {
        echo "Ayar sınıfı index metodu çağrıldı <br>" ;
        echo "Parametre: $id" ;
    }
}