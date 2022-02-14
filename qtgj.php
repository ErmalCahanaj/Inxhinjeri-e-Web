<?php 
    session_start();
    require_once 'authq_check.php';
?>
<?php 
    require_once('dbconfig.php'); 
    $db = new operations();
    require_once('userRepository.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <title>Qendra pÃĢr Transfuzionin e Gjakut</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="qtgj.php">QTGJ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="shpalljet.php">Shpalljet</a>
          </li>
        </ul>
        <ul>
          <li class="nav-item">
            <p class="nav-link">Pershendetje:<?php echo ucfirst($_SESSION['nrqendres']);?></p>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
        <ul>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Dilni/Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="col-md-10 col-post" >
      <?php $db->Store_Record(); ?>
      <form method="post" action="<?= $_SERVER['PHP_SELF']?>">

        <div class="row row-gjaku">

          <select class="select-grupigjakut" require="required" name="grupigjakut" id="grupigjakut" style=" border-radius: 5px;
                  width: 50% ;
                  color: #dc3545;
                  text-align: center;
                  font-size: 20px;">
            <option value="" disabled selected hidden>Grupi gjakut*</option>
            <option name="0" value="0">0</option>
            <option name="A" value="A">A</option>
            <option name="B" value="B">B</option>
            <option name="AB" value="AB">AB</option>
          </select>

          <select class="select-rhd" name="rhd" require="required" id="rhd" style=" border-radius: 5px;
                  width: 50%;
                  color: #dc3545;
                  text-align: center;
                  font-size: 20px;">
            <option value="" disabled selected hidden>
              Zgjedhni Rh(D)*
            </option>
            <option name="+" value="+">+ (poz)</option>
            <option name="-" value="-">- (ngt)</option>
          </select>

        </div>

        <div class="row row-info">

          <input class="vendi" type="text" placeholder="Vendi*" name="vendi" />

          <input class="kontaktit" type="number" name="nrkontakt" placeholder="Numri i kontaktit*" />

        </div>

        <div class="row row-sasia">
          <div class="sasia">
            <output>Doza 250-350ml </output>
          </div>

          <div class="doza">
            <input type="number" require="required" name="doza1" class="doza1" placeholder="Numri dozave" />
          </div>
        </div>

        <div class="btn-center">
          <button type="submit" name="btn_save" class="btn btn-submit btn-danger">
            Shpall
          </button>
        </div>
      </form>

    </div>

    <div class="col-md-6" style="float: right">

    </div>



</body>

</html>