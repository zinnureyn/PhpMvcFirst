<?php


class kayit_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function kontrolet($tabload, $sutunlarim, $veri)
    {

        return $this->db->Ekle($tabload, $sutunlarim, $veri);

    }

    function listeleme($tabload, $kosul)
    {

        return $this->db->listele($tabload, $kosul);

    }

    function silme($tabload, $kosul)
    {

        return $this->db->sil($tabload, $kosul);

    }

    function kayitguncel($tabload, $sutunlar, $veriler, $kosul)
    {
        return $this->db->guncelle($tabload, $sutunlar, $veriler, $kosul);
    }

    function kayitarama($tabload, $kosul)
    {
        return $this->db->arama($tabload, $kosul);
    }

}