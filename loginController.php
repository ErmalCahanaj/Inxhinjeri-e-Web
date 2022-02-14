<?php 
include_once 'userRepository.php';

session_start();
if(isset($_POST['loginBtn'])){
    if(empty($_POST['nrpersonal']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $nrpersonal = $_POST['nrpersonal'];
      $password = $_POST['password'];

      $_SESSION['nrpersonal'] = $nrpersonal;
      $_SESSION['password'] = $password;

      $userRepository = new UserRepository;
      $user = $userRepository->getUserByNrpersonal($nrpersonal,$password);
  
      if(empty($user)){
        echo "nrpersonal or Password is Incorrect!";
        
      }else{
        header("location:index.php"); 
       
      }


    }
}

?>