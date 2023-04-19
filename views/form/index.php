<?php
require 'views/header.php';

?>


<div class="col-lg-12 text-center border-bottom">
    <div class="row col-lg-4 mx-auto m-2 border bg-light" >
        <div class="row col-lg-12 border-bottom ">KAYIT FORMU</div>
        <div class="row col-lg-6">ADI</div>
        <div class="row col-lg-6"><form action="<?php echo URL; ?>/kayit/kontrol" method="post"><input type="text" name="ad" class="form-control"/></div>

        <div class="row col-lg-6">SOYADI</div>
        <div class="row col-lg-6"> <input type="text" name="soyad" class="form-control"/></div>

        <div class="row col-lg-6">YAŞ</div>
        <div class="row col-lg-6"><input type="text" name="yas" class="form-control"/></div>

        <div class="row col-lg-12"><input type="submit" name="button/" value="ekle" class="btn btn-success"></div>
        </form>
    </div>

</div>
<?php

require 'views/footer.php';
?>
