<?php
include_once 'registerControllerq.php';

?>

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
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
    <title>Regjistrohu</title>
  </head>

  <body>
    <div class="container">
      <div class="wrapper card2">
        <div class="title"><span>Regjistrohu si QTGJ</span></div>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post"
        name="myform" onsubmit="return validateform()">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Emri i qendrës*" value="<?=$name?>" name="name" />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input
              type="number"
              placeholder="Numri i qendrës*"
              minlength="9"
              maxlength="10"
              value="<?=$nrqendres?>"
              name="nrqendres"
            />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Fjalkalimi*" value="<?=$password?>" name="password" />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input
              type="number"
              value="<?=$nrkontakt?>"
              placeholder="Numri i kontaktit*"
              name="nrkontakt"
            />
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Vendi*"  value="<?=$vendi?>"name="vendi" />
          </div>

          <div class="row button">
          <input type="submit" value="register" name="registerBtn">    
          </div>

          <div class="signup-link">
            Fushat me "<span style="color: red">*</span>" duhet te plotesohen
          </div>
          <div class="signup-link">
            Keni llogari? <a href="login-qtgj.php">Kyçuni ketu</a>
          </div>
        </form>
      </div>
    </div>

    <footer class="bg-dark text-center">
      <div class="text-center p-3" style="color: white" ;>
        Made with ❤ by: Drilon Haliti & Ermal Cahanaj
      </div>
    </footer>
    <script>
      function validateform() {
        var name = document.myform.name.value;
        var password = document.myform.password.value;
        var nrqendres = document.myform.nrqendres.value;
        var nrkontakt = document.myform.nrkontakt.value;
        var vendi = document.myform.vendi.value;

        if (name == null || name == "") {
          alert("Ju lutem plotesoni Emrin");
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
        } else if (nrqendres.length != 10) {
          alert("Numri qendres ka 10 karaktere");
          return false;
        } else alert("Regjistrimi u krye");
      }
    </script>
  </body>
</html>
