<?php


class erroresController extends controller
{


    function __construct() {
        parent::__construct();
        error_log('errores::construct -> inicio de errores');

    }

    //cargamos la vista por defecto 
    function render(){
        error_log('errores::render -> render de errores');
        $this->view->render('errores/index');
     }
}
