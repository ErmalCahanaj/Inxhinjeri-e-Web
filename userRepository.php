<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();
       

        $id = $user->getId();
        $name = $user->getName();
        $mbiemri = $user->getmbiemri();
        $grupigjakut= $user->getGrupigjakut();
        $nrkontakt= $user->getNrkontakt();
        $rhd= $user->getRhd();
        $vendi= $user->getVendi();
        $dataa= $user->getDataa();
        $nrpersonal= $user->getNrpersonal();
        $password = $user->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " mbiemri: $mbiemri";
        echo " grupigjakut: $grupigjakut";
        echo " nrkontakt: $nrkontakt";
        echo " rhd: $rhd";  
        echo " dataa : $dataa ";
        echo " vendi: $vendi";
        echo " nrpersonal: $nrpersonal";
        echo " password: $password";
        echo "<br>";


        $sql = "INSERT INTO useri (Id,Name,mbiemri,grupigjakut,rhd,nrkontakt,vendi,dataa,Password,nrpersonal) VALUES 
        ('$id','$name','$mbiemri','$grupigjakut','$rhd','$nrkontakt','$vendi','$dataa','$password','$nrpersonal')";
        if(mysqli_query($conn,$sql)){
        echo "query is executed succesfuly";
            header("location:login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }


    }

    function getUserByNrpersonal($nrpersonal,$password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM useri WHERE nrpersonal = '$nrpersonal' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            echo "query is executed succesfuly";
            return $result;
        }else{
            return null;
        }
    }

    
}


?>