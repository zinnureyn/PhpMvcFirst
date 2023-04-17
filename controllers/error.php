<?php
class hata extends Controller
{
    function __construct()
    {
        parent::__construct();
       // echo "Error sınıfı çağrıldı<br>" ;
        $this -> view -> mesaj = "Bu sayfayı görüntüleme yetkiniz yok";
        $this -> view -> goster('hata/index');
    }


}



?>
