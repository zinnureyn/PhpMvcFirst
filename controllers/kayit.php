<?php

class kayit extends Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->view->goster("form/index");
        $this->Modelyukle("kayit");

    }
    function kayitekle()
    {
        $this->view->goster("form/index");
    }
    function kontrol()
    {

            $ad=$_POST['ad'];
            $soyad=$_POST['soyad'];
            $yas=$_POST['yas'];

        $sonuc=$this->model->kontrolet("ogrenci",array("ad","soyad","yas"),array($ad,$soyad,$yas));
        //  $this->view->mesaj=$sonuc;
        $this->view->goster("form/sonuc",$sonuc);
    }

}