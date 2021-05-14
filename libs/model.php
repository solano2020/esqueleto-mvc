<?php 
/*        
        clase padre para los modelos 
        que interactuan con la base de datos 
*/

include_once 'libs/imodel.php';

class model{


    function __construct()
    {
        $this->db = new database();
    }

    //funcion para realizar consultas
    function query($query){
        return $this->db->connect()->query($query);
    }

    //funcion para preparar la consulta
    function prepare($query){
        return $this->db->connect()->prepare($query);
    }
}