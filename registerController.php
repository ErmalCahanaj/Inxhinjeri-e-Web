<?php
include_once 'userRepository.php';
include_once 'user.php';

$name=$mbiemri=$nrpersonal=$grupigjakut=$rhd=$nrkontakt=$vendi=$dataa=$password="";

if(isset($_POST['registerBtn'])){
  if(empty($_POST['name'])  || empty($_POST['mbiemri']) || empty($_POST['nrpersonal']) ||
  empty($_POST['grupigjakut']) || empty($_POST['rhd']) || empty($_POST['nrkontakt']) ||
  empty($_POST['vendi']) || empty($_POST['dataa']) || empty($_POST['password'])){
    $name = $_POST['name'];
    $mbiemri = $_POST['mbiemri'];
    $nrpersonal = $_POST['nrpersonal'];
    $grupigjakut = $_POST['grupigjakut'];
    $rhd = $_POST['rhd'];
    $nrkontakt = $_POST['nrkontakt'];
    $vendi = $_POST['vendi'];
    $dataa = $_POST['dataa'];
    $password = $_POST['password'];
      echo "<pre style='color:red; font-size:15px;'>*Fill all required Fields</pre>";
  }else{
    $id = rand(100,999)."$nrpersonal";
    $name = $_POST['name'];
    $mbiemri = $_POST['mbiemri'];
    $nrpersonal = $_POST['nrpersonal'];
    $grupigjakut = $_POST['grupigjakut'];
    $rhd = $_POST['rhd'];
    $nrkontakt = $_POST['nrkontakt'];
    $vendi = $_POST['vendi'];
    $dataa = $_POST['dataa'];
    $password = $_POST['password'];

      $user = new User($id,$name,$mbiemri,$nrpersonal,$grupigjakut,$password,$rhd,$nrkontakt,$vendi,$dataa);

      $userRepository = new UserRepository;

      $userRepository->insertUser($user);

  }
}

?>