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
    <link rel="stylesheet" href="register.css" />
    <title>Regjistrohu</title>
  </head>

  <body>

  <?php
	require_once('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `userss` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>


    <div class="container">
      <div class="wrapper card1">
        <div class="title"><span>Regjistrohu</span></div>

        <form action="#" name="myform" onsubmit="return validateform()">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Emri*" name="name" />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Mbiemri*" name="mbiemri" />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input
              type="number"
              placeholder="Numri personal*"
              name="nrpersonal"
              minlength="9"
              maxlength="10"
            />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <select
              name="grupigjakut"
              id="grupigjakut"
              style="padding-left: 60px; color: gray"
              required
            >
              <option value="" disabled selected hidden>Grupi gjakut*</option>
              <option value="0">0</option>
              <option value="a">A</option>
              <option value="a">B</option>
              <option value="a">AB</option>
            </select>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <select
              name="rhd"
              id="rhd"
              style="padding-left: 60px; color: gray"
              required
            >
              <option value="" disabled selected hidden>
                Zgjedhni Rh(D) tuaj*
              </option>
              <option value="+">+ (poz)</option>
              <option value="-">- (ngt)</option>
            </select>
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Fjalkalimi*" />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input
              type="number"
              name="nrkontakt"
              placeholder="Numri i kontaktit*"
            />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Vendi*" name="vendi" />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input
              type="date"
              placeholder="Datëlindja*"
              min="1930-01-01"
              max="2004-12-31"
              id="datelindja"
              style="color: gray"
            />
          </div>

          <div class="row button">
            <input type="submit" value="Regjistrohu" />
          </div>

          <div class="signup-link">
            Fushat me "<span style="color: red">*</span>" duhet te plotesohen
          </div>
          <div class="signup-link">
            Keni llogari? <a href="login.html">Kyçuni ketu</a>
          </div>
        </form>
      </div>
    </div>

    <footer class="bg-dark text-center">
      <div class="text-center p-3" style="color: white" ;>
        Made with ❤ by: Drilon Haliti & Ermal Cahanaj
      </div>
    </footer>
    <?php } ?>
    <script>
      function validateform() {
        var name = document.myform.name.value;
        var password = document.myform.password.value;
        var mbiemri = document.myform.mbiemri.value;
        var nrpersonal = document.myform.nrpersonal.value;
        var nrkontakt = document.myform.nrkontakt.value;
        var vendi = document.myform.vendi.value;

        if (name == null || name == "") {
          alert("Ju lutem plotesoni Emrin");
          return false;
        } else if (mbiemri == null || mbiemri == "") {
          alert("Ju lutem plotesoni Mbiemrin");
          return false;
        } else if (nrpersonal == null || nrpersonal == "") {
          alert("Ju lutem plotesoni Numrin Personal");
          return false;
        } else if (nrkontakt == null || nrkontakt == "") {
          alert("Ju lutem plotesoni Numrin e Kontaktit");
          return false;
        } else if (vendi == null || vendi == "") {
          alert("Ju lutem shenoni Qytetin");
          return false;
        } else if (password.length < 6) {
          alert("Passwordi duhet te jete me shume se 6 karkatere");
          return false;
        } else alert("Regjistrimi u krye");
      }
    </script>
  </body>
</html>