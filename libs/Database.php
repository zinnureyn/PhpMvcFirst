<?php

class Database extends PDO
{
    protected $dizi = array();
    protected $dizi2 = array();


    function __construct()
    {
        parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

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

    function listele($tabloisim, $kosul = false)
    {
        if ($kosul == false):
            $sorgum = "select * from " . $tabloisim;
        else:
            $sorgum = "select * from " . $tabloisim . " " . $kosul;

        endif;

        $son = $this->prepare($sorgum);
        $son->execute();
        return $son->fetchAll();
    }

    function sil($tabloisim, $kosul = false)
    {
        $sorgum = "delete from $tabloisim where $kosul";
        $sorgum = $this->prepare($sorgum);
        if ($sorgum->execute()):
            return $this->bilgi->basarili("Kayıt Silindi", "/kayit/listele");
        else:
            return $this->bilgi->hata("Kayıt Silinemedi", "/kayit/listele");
        endif;
    }

    function guncelle($tabloisim, $sutunlar, $veriler, $kosul)
    {
        foreach ($sutunlar as $deger):
            $this->dizi2[] = $deger . "=?";
        endforeach;
        $sutunlar = join(",", $this->dizi2);

        $sorgum = "update " . $tabloisim . " set " . $sutunlar . " where " . $kosul;
        $sorgum = $this->prepare($sorgum);
        if ($sorgum->execute($veriler)):
            return $this->bilgi->basarili("Kayıt Güncellendi", "/kayit/listele");
        else:
            return $this->bilgi->hata("Kayıt Güncellenemedi", "/kayit/listele");
        endif;
    }


    function arama($tabloisim, $kosul)
    {
        $sorgum = "select * from " . $tabloisim . " where " . $kosul;
        $sorgum = $this->prepare($sorgum);
        $sorgum->execute();
        return $sorgum->fetchAll();
    }

    function giriskontrol($tabload, $kosul)
    {
        $sorgum = "select * from " . $tabload . " where " . $kosul;
        $sorgum = $this->prepare($sorgum);
        $sorgum->execute();

        if ($sorgum->rowCount() > 0):
            Session::init();
            Session::set("kulad", true);

        endif;
        return $sorgum->rowCount();
    }
}

?>