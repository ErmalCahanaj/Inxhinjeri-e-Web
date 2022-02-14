<?php 
    session_start();
    require_once 'auth_check.php';
?>
<?php 
    require_once('dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
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
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    <title>Ballina</title>
  </head>

  <body>   
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ballina</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
          <ul>
            <li class="nav-item">
              <p class="nav-link">Pershendetje:<?php echo ucfirst($_SESSION['nrpersonal']);?></p>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
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
  
      <div class="row">
      <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
        <div class="col-md-3">

        <div
          class="card card-kerkesa text-center border-danger mb-2"
          style="max-width: 18rem"
         >
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
            <div class="butonat">
          <input type="submit" class="btn btn-success" placeholder="Prano"  value="Prano" />
                                
                              
            </div>
          </div>
        </div>

                                    </div>
       <?php
                                    }
                                ?>
                                </div>
      <div class="row">
       <div
        id="carouselExampleFade"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
       >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/blood-donation.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="img/man-giving-blood-donation-royalty-free-image-1585844359.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="img/D53297C6-155D-D235-07048C3BAF7898A0.jpeg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
 
    </div>
  
    <footer id="footer" class="bg-dark text-center">
      <div class="text-center p-3" style="color: white" ;>
        Made with ❤ by: Drilon Haliti & Ermal Cahanaj
      </div>
    </footer>
  </body>
</html>
