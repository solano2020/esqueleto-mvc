<?php

//implement nos permite hacer polimorfismo con imodel asi:
//class loginModel extends model implements imodel (obligado debe implementar los metodos de imodel)

class loginModel extends model{

    function __construct()
    {
        parent::__construct();
    }



}