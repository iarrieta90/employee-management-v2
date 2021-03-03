<?php
class Errors extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message = "There was a request error";
        $this->view->render('errors/index');
    }
}