<?php
require 'views/header.php';

?>


<div class="col-lg-12 text-center border-bottom">
    <div class="row col-lg-4 mx-auto m-2 border bg-light" >
        <div class="row col-lg-12 border-bottom ">GİRİŞ FORMU</div>
        <div class="row col-lg-6">Kullanıcı Adı</div>
        <div class="row col-lg-6"><form action="<?php echo URL; ?>/login/giriskontrol" method="post"><input type="text" name="ad" class="form-control"/></div>

        <div class="row col-lg-6">Şifre</div>
        <div class="row col-lg-6"> <input type="password" name="sifre" class="form-control"/></div>



        <div class="row col-lg-12"><input type="submit" name="button/" value="Giriş Yap" class="btn btn-success"></div>
        </form>
    </div>

</div>
<?php

require 'views/footer.php';
?>
