<?php

class Controller
{
    function __construct()
    {
        //echo "Ana kontrolcü<br>" ;
        $this->view = new View();
        $this->form = new Form();
    }
    function Modelyukle($name)
    {
        $path = "model/" . $name . "_model.php";
        if (file_exists($path)) {
            require $path;
            $modelName = $name . "_model";
            $this->model = new $modelName();
        }
    }
}
?>
