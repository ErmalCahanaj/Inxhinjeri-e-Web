<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
  </head>

  <body>
  <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['nrpersonal'])){
		
		$nrpersonal = stripslashes($_REQUEST['nrpersonal']); // removes backslashes
		$nrpersonal = mysqli_real_escape_string($con,$nrpersonal); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `userss` WHERE nrpersonal='$nrpersonal' and password='".md5($password)."'"; //function uses the RSA Data Security
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result); //return the number of rows present in the result set
        if($rows==1){
			$_SESSION['nrpersonal'] = $nrpersonal;
			header("Location: index.html"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>nrpersonal/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Kyçu</span></div>
        <form action="#" method="POST" name="myform" onsubmit="return validateform()">
          <div class="row">
            <i class="fas fa-user"></i>
            <input
              type="text"
              placeholder="Numri personal*"
              name="nrpersonal"
            />
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Fjalkalimi*" />
          </div>
          <div class="pass"><a href="#">Keni harruar fjalkalimin?</a></div>
          <div class="row button">
            <input type="submit" value="Kyçu" />
          </div>
          <div class="signup-link">
            Nuk keni llogari? <a href="register.html">Krijoni nje llogari</a>
          </div>
          <div class="signup-link">
            <a href="register2.html">Krijoni nje llogari si QTGJ</a>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>

    <footer id="footer" class="bg-dark text-center">
      <div class="text-center p-3" style="color: white" ;>
        Made with ❤ by: Drilon Haliti & Ermal Cahanaj
      </div>
    </footer>
    <script>
      function validateform() {
        var nrpersonal = document.myform.nrpersonal.value;
        var password = document.myform.password.value;
        if (nrpersonal == null || nrpersonal == "") {
          alert("Ju lutem plotesoni Numrin Personal");
          return false;
        } else if (password.length < 6) {
          alert("Passwordi duhet te jete me shume se 6 karkatere");
          return false;
        } else alert("Mire se erdhet");
      }
    </script>
  </body>
</html>
