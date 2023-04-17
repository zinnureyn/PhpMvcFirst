<?php

class kayit extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->goster("index/index");
        $this->Modelyukle("kayit");

    }

}