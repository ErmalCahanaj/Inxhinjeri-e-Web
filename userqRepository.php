<?php 
include_once 'databaseConnectionq.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($qtgj){
       
        $conn = $this->connection->startConnection();
       

        $id = $qtgj->getId();
        $name = $qtgj->getName();
        $nrkontakt= $qtgj->getNrkontakt();
        $vendi= $qtgj->getVendi();
        $nrqendres= $qtgj->getNrqendres();
        $password = $qtgj->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " nrkontakt: $nrkontakt";
        echo " vendi: $vendi";
        echo " nrqendres: $nrqendres";
        echo " password: $password";
        echo "<br>";

        $sql = "INSERT INTO uzeri (Id,Name,nrkontakt,vendi,Password,nrqendres) VALUES 
        ('$id','$name','$nrkontakt','$vendi','$password','$nrqendres')";
        if(mysqli_query($conn,$sql)){
            echo "query is executed succesfuly";
            header("location:login-qtgj.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }

    }

    function getUserBynrqendres($nrqendres,$password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM uzeri WHERE nrqendres = '$nrqendres' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }

}



?>


