<?php

class login extends Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->view->goster("form/index");
        $this->Modelyukle("login");


    }

    function Form()
    {
        $this->view->goster("form/giris");
    }

    function giriskontrol()
    {
        $ad = $this->form->get("ad")->bosmu();//zincir metod zincir class denir
        $sifre = $this->form->get("sifre")->bosmu();

        if (!empty($this->form->error)):
            $hata = $this->form->error;
            $yonlen = $this->bilgi->hata(false, "/login/Form");
            $this->view->goster("form/sonuc", $hata, $yonlen);
            //return $this->bilgi->hata("Kayıt Başarısız", "/kayit/kayitekle");
        else:
            $sonuc = $this->model->giriskontrol("panel", "ad='" . $ad . "' and sifre='" . $sifre . "'");

            if ($sonuc == 1):
              //  Session::init();
              //  Session::set("kulad",$ad);
                header("location:" . URL . "/panel");
            else:
                $yonlen = $this->bilgi->hata("eşleşme yok", "/login/Form");
                $this->view->goster("panel/sonuc", $this->form->error, $yonlen);
            endif;

        //            parent::hata(false, "/kayit/kayitekle");

        endif;
    }

}