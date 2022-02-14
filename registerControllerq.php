
<?php
include_once 'userqRepository.php';
include_once 'userq.php';

$name=$nrqendres=$nrkontakt=$vendi=$password="";

if(isset($_POST['registerBtn'])){
  if(empty($_POST['name'])  || empty($_POST['nrqendres']) || empty($_POST['nrkontakt']) ||
  empty($_POST['vendi']) || empty($_POST['password'])){
    $name = $_POST['name'];
    $nrqendres = $_POST['nrqendres'];
    $nrkontakt = $_POST['nrkontakt'];
    $vendi = $_POST['vendi'];
    $password = $_POST['password'];
      echo "<pre style='color:red; font-size:15px;'>*Fill all required Fields</pre>";
  }else{
    $id = rand(100,999)."$nrqendres";
    $name = $_POST['name'];
    $nrqendres = $_POST['nrqendres'];
    $nrkontakt = $_POST['nrkontakt'];
    $vendi = $_POST['vendi'];
    $password = $_POST['password'];

      $qtgj = new Qtgj($id,$name,$nrqendres,$password,$nrkontakt,$vendi);

      $userRepository = new UserRepository;

      $userRepository->insertUser($qtgj);

  }
}

?>

