<?php

class DatabaseConnection{
    private $server="localhost";
    private $nrpersonal="root";
    private $password="";
    private $database="test";

   

    function startConnection(){
        if(!$conn = mysqli_connect($this->server,$this->nrpersonal,$this->password,$this->database)){
             return null;
        }else{
            return $conn;
        }
    }
}

?>