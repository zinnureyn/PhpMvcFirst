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
            $yonlen = $this->bilgi->hata(false, "/kayit/kayitekle");
            $this->view->goster("form/sonuc", $hata, $yonlen);
        else:
            $sonuc = $this->model->kontrolet("ogrenci", array("ad", "soyad", "yas"), array($ad, $soyad, $yas));
            //  $this->view->mesaj=$sonuc;
            $this->view->goster("form/sonuc", $sonuc);
        endif;
    }

    function listele()
    {
        $sonuc = $this->model->listeleme("ogrenci", "order by id desc");

        $this->view->goster("form/listele", $sonuc);

    }

    function kayitsil($id)
    {
        $sonuc = $this->model->silme("ogrenci", "id=" . $id);
        $this->view->goster("form/sonuc", $sonuc);
    }

    function kayitguncelle($id)
    {
        $sonuc = $this->model->listeleme("ogrenci", "where id=" . $id);

        $this->view->goster("form/guncelle", $sonuc);

    }

    function guncelleson()
    {
        $ad = $this->form->get("ad")->bosmu();
        $soyad = $this->form->get("soyad")->bosmu();
        $yas = $this->form->get("yas")->bosmu();
        $id = $this->form->get("kayitid")->bosmu();


        if (!empty($this->form->error)):
            $hata = $this->form->error;
            $this->view->goster("form/sonuc", $hata);
        else:
            $sonuc = $this->model->kayitguncel("ogrenci", array("ad", "soyad", "yas"), array($ad, $soyad, $yas), "id=" . $id);
            //  $this->view->mesaj=$sonuc;
            $this->view->goster("form/sonuc", $sonuc);
        endif;

    }

    function arama()
    {
        $kelime = $this->form->get("kelime")->bosmu();

        if (!empty($this->form->error)):
            $hata = $this->form->error;
            $this->view->goster("form/sonuc", $hata);
        else:
            $sonuc = $this->model->kayitarama("ogrenci", "ad like '%" . $kelime . "%' or soyad like '%" . $kelime . "%' or yas like '%" . $kelime . "%'");
            $this->view->goster("form/listele", $sonuc);
        endif;
    }
}