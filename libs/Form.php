<?php

class Form extends Bilgi
{
    public $deger, $veri;
    public $error = array();

    function get($key)
    {
        $this->deger = $key;
        //burda degeri alıyoruz bosmu fonksiyonunda hataları göstermek için
        $this->veri = htmlspecialchars(strip_tags($_POST[$key]));

        return $this;
    }

    function bosmu()
    {
        if (empty($this->veri)):
            $this->error[] = $this->deger . " alanı boş bırakılamaz";
            return $this;
        else:
            return $this->veri;
        endif;
    }
}

?>