<?php 
  class Qtgj{
    private $id;
    private $name;
    private $nrkontakt;
    private $vendi;
    private $password;
    private $nrqendres;

      function __construct($id,$name,$nrqendres,$password,$nrkontakt,$vendi){
        $this->id = $id;
        $this->name = $name;
        $this->nrqendres = $nrqendres;
        $this->nrkontakt = $nrkontakt;
        $this->vendi = $vendi;
        $this->password = $password;
        
      }
   function getId(){
        return $this->id;
    }
      function getName(){
          return $this->name;
      }

      function getnrkontakt(){
        return $this->nrkontakt;
      }
      function getvendi(){
        return $this->vendi;
      }

      function getPassword(){
        return $this->password;
      }
      function getnrqendres(){
        return $this->nrqendres;
      }

      function __toString(){
        return "User: ".$this->name." - ".$this->vendi;
      }
  }
?>
