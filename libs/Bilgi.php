<?php

class Bilgi
{
    function basarili($mesaj, $yol)
    {
        return "<div class='alert alert-success mt-5' role='alert'>" . $mesaj . "</div>"
            . header("Refresh: 3; url=".URL. $yol);
    }

    function hata($mesaj = false, $yol)
    {
        return "<div class='alert alert-danger mt-5' role='alert'>" . $mesaj . "</div>"
            . header("Refresh: 3; url=".URL. $yol);

    }

}

?>