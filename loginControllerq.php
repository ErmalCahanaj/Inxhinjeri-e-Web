<?php 
include_once 'userqRepository.php';
session_start();
if(isset($_POST['loginBtn'])){
    if(empty($_POST['nrqendres']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $nrqendres = $_POST['nrqendres'];
      $password = $_POST['password'];
      $vendi = $_POST['vendi'];
     

      $userRepository = new UserRepository;
      $qtgj = $userRepository->getUserByNrqendres($nrqendres,$password);
  
      $_SESSION['nrqendres'] = $nrqendres;
      $_SESSION['vendi'] = $vendi;
      $_SESSION['password'] = $password;

      if(empty($qtgj)){
        echo "nrqendres or Password is Incorrect!";
        
      }else{
       
        header("location:qtgj.php"); 
      }

    }
}

