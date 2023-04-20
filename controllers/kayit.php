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
        $ad = $this->form->get("ad")->bosmu();//zincir metod zincir class denir
        $soyad = $this->form->get("soyad")->bosmu();
        $yas = $this->form->get("yas")->bosmu();

        /*
        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];
        $yas=$_POST['yas'];
        */

        if (!empty($this->form->error)):
            $hata = $this->form->error;
            $this->view->goster("form/sonuc", $hata);
        else:


            $sonuc = $this->model->kontrolet("ogrenci", array("ad", "soyad", "yas"), array($ad, $soyad, $yas));
            //  $this->view->mesaj=$sonuc;
            $this->view->goster("form/sonuc", $sonuc);
        endif;
    }

}