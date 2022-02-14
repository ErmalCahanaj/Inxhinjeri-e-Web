<?php

class DatabaseConnection{
    private $server="localhost";
    private $nrqendres="root";
    private $password="";
    private $database="test";

   

    function startConnection(){
        if(!$conn = mysqli_connect($this->server,$this->nrqendres,$this->password,$this->database)){
            //echo "Connection failed";
             return null;
        }else{
           // echo "Connection successfully";
            return $conn;
        }
    }
}

?>
