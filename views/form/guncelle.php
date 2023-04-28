<?php
require 'views/header.php';
?>


<div class="col-lg-12 text-center border-bottom">
    <?php
    foreach ($data as $key => $value):
        $id = $value["id"];
        $ad = $value["ad"];
        $soyad = $value["soyad"];
        $yas = $value["yas"];
    endforeach;
    ?>
    <div class="row col-lg-4 mx-auto m-2 border bg-light">
        <div class="row col-lg-12 border-bottom text-danger">Güncelleme FORMU</div>
        <div class="row col-lg-6">ADI</div>
        <div class="row col-lg-6">
            <form action="<?php echo URL; ?>/kayit/guncelleson" method="post">
                <input type="text" name="ad" value="<?php echo $ad ?>" class="form-control"/>
        </div>

        <div class="row col-lg-6">SOYADI</div>
        <div class="row col-lg-6"><input type="text" name="soyad" value="<?php echo $soyad ?>"  class="form-control"/></div>

        <div class="row col-lg-6">YAŞ</div>
        <div class="row col-lg-6">
            <input type="text" name="yas" value="<?php echo $yas ?>"  class="form-control"/>
            <input type="hidden" name="kayitid" value="<?php echo $id ?>"  class="form-control"/>
        </div>

        <div class="row col-lg-12"><input type="submit" name="button/" value="Güncelle" class="btn btn-success"></div>
        </form>
    </div>

</div>
<?php

require 'views/footer.php';
?>
