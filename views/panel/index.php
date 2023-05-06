<?php
require 'views/header.php';

?>


<div class="col-lg-12 text-center border-bottom">
    <h5> BURASI Panel</h5><br/>
    <?php

    if (is_array($data)):
        echo '<div class="alert alert-danger mt-5" role="alert">';
        foreach ($data as $key => $value):
            echo   $value . "<br/>";
        endforeach;
        echo '</div>';
    else:
        echo $data;

    endif;


    ?>

</div>
<?php

require 'views/footer.php';
?>
