<?php
class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function notFound()
    {
        echo "Error 404";
        //$this->views->getView($this, "errors");
    }
}
