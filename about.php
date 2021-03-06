<?php 
    session_start();
    require_once 'auth_check.php';
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
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
    <title>Rreth nesh</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="Index.php">Ballina</a>
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
              <a class="nav-link" href="">About Us</a>
            </li>
          </ul>
          <ul>
            <li class="nav-item">
              <p class="nav-link">Pershendetje:<?php echo ucfirst($_SESSION['nrpersonal']);?></p>
            </li>
          </ul>
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Dilni/Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
    <div class="container-fluid">
      <div class="row aboutus-txt">
        <output class="output-aboutus">
          <h1 style="text-align: center">Rreth Nesh</h1>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos
          repellendus, ipsa ea sapiente excepturi magni id reprehenderit
          similique autem iusto? Aspernatur adipisci ut aliquam impedit maiores
          earum ea culpa omnis. Lorem ipsum dolor, sit amet consectetur
          adipisicing elit. Quos repellendus, ipsa ea sapiente excepturi magni
          id reprehenderit similique autem iusto? Aspernatur adipisci ut aliquam
          impedit maiores earum ea culpa omnis. Lorem ipsum dolor, sit amet
          consectetur adipisicing elit. Quos repellendus, ipsa ea sapiente
          excepturi magni id reprehenderit similique autem iusto? Aspernatur
          adipisci ut aliquam impedit maiores earum ea culpa omnis. Lorem ipsum
          dolor, sit amet consectetur adipisicing elit. Quos repellendus, ipsa
          ea sapiente excepturi magni id reprehenderit similique autem iusto?
          Aspernatur adipisci ut aliquam impedit maiores earum ea culpa omnis.
        </output>
      </div>

      <div class="row row-bio">
        <div
          class="card card-bio text-white bg-dark card-ec"
          style="width: 18rem"
        >
          <img src="img/ec.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <p class="card-text">Ermal Cahanaj</p>
            <p class="card-text"></p>
          </div>
        </div>

        <div
          class="card card-bio text-white bg-dark card-dh"
          style="width: 18rem"
        >
          <img src="img/dh.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <p class="card-text">Drilon Haliti</p>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
