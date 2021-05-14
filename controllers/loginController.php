<?php


class loginController extends controller{


    function __construct()
    {
        parent:: __construct();
        error_log('loginController::construct -> inicio de login');
    }


    //cargamos la vista por defecto 
    function render(){
       $this->view->render('login/index');
    }

}