<?php 
    session_start();
    require_once 'authq_check.php';
?>
<?php 
    
    require_once('dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <title>Shpalljet</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="qtgj.php">Qtgj</a>
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

    <div class="row row-cols-1 row-cols-md-4 g-3">
    


             <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
      <div class="col">
        <div class="card card-kerkesa text-center border-danger mb-2" style="max-width: 18rem">
          <div class="card-header bg-danger" style="display:none"><?php echo $data['ID'] ?></div>
          <div class="card-header bg-danger">Kerkohet gjak</div>
          <div class="card-body text-danger">
          <h3 class="card-title">Grupi Gjakut: <?php echo $data['grupigjakut'] ?></h3>
            <h5 class="card-title">RhD: <?php echo $data['rhd'] ?></h5>
            <p class="card-text">
              Vendi: <?php echo $data['vendi'] ?>
            </p>
            <p class="card-text">
              NrKontak: <?php echo $data['nrkontakt'] ?>
            </p>
            <p class="card-text">
              Sasia Dozave: <?php echo $data['doza1'] ?>
            </p>
            <a href="del.php?D_ID=<?php echo $data['ID'] ?>" class="btn btn-danger">Fshij shpalljen</a>
          </div>
        </div>
      </div>
      <?php
                                    }
                                ?>

     
    </div>

  </div>




  <footer id="footer" class="bg-dark text-center">
    <div class="text-center p-3" style="color: white" ;>
      Made with ❤ by: Drilon Haliti & Ermal Cahanaj
    </div>
  </footer>

</body>

</html>