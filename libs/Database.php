<?php

class Database extends PDO
{

    protected $dizi = array();

    function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=mvcproje', 'root', '00000000');

        $this->bilgi = new Bilgi();

    }

    function Ekle($tablo, $sutun, $deger)
    {
        $sutunSayi = count($sutun);

        for ($i = 0; $i < $sutunSayi; $i++):
            $this->dizi[] = '?';
        endfor;
        $sonVal = join(",", $this->dizi);  //dizi elemanlarını birleştirir
        $sonhal = join(",", $sutun);
        $sorgu = $this->prepare('INSERT INTO ' . $tablo . ' (' . $sonhal . ') VALUES (' . $sonVal . ')');
        // $this->exec($sql);
        if ($sorgu->execute($deger)):

            return $this->bilgi->basarili("Kayıt Başarılı", "/kayit/kayitekle");
        else:
            return $this->bilgi->hata("Kayıt Başarısız", "/kayit/kayitekle");
        endif;
    }


}

?>