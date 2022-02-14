<?php 
  class User{
    private $id;
    private $name;
    private $mbiemri;
    private $grupigjakut;
    private $rhd;
    private $nrkontakt;
    private $vendi;
    private $dataa;
    private $password;
    private $nrpersonal;

      function __construct($id,$name,$mbiemri,$nrpersonal,$grupigjakut,$password,$rhd,$nrkontakt,$vendi,$dataa){
        $this->id = $id;
        $this->name = $name;
        $this->mbiemri = $mbiemri;
        $this->nrpersonal = $nrpersonal;
        $this->grupigjakut = $grupigjakut;
        $this->rhd= $rhd;
        $this->nrkontakt = $nrkontakt;
        $this->vendi = $vendi;
        $this->dataa = $dataa;
        $this->password = $password;
        
      }
  function getId(){
        return $this->id;
    }
      function getName(){
          return $this->name;
      }
      function getmbiemri(){
        return $this->mbiemri;
      }
      function getgrupigjakut(){
        return $this->grupigjakut;
      }
      function getrhd(){
        return $this->rhd;
      }
      function getnrkontakt(){
        return $this->nrkontakt;
      }
      function getvendi(){
        return $this->vendi;
      }
      function getdataa(){
        return $this->dataa;
      }
      function getPassword(){
        return $this->password;
      }
      function getnrpersonal(){
        return $this->nrpersonal;
      }


      function __toString(){
        return "User: ".$this->name." - ".$this->mbiemri." - ".$this->vendi;
      }
  }


?>