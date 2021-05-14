<?php

//definimos metodos basicos que deben ser implementados en los modelos
//se definen aca por que van a tener un comportamiento diferente para cada modelo
interface imodel{
      
    //metodos CRUD
      public function save();
      public function getAll();
      public function get($id);
      public function delete($id);
      public function update();
      public function from($array);
}