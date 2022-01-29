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
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Qendra për Transfuzionin e Gjakut</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">QTGJ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="qtgj.html">Ballina</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
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
            <a class="nav-link" href="login-qtgj.php">Dilni/Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="col-md-5 col-post" style="float: left">
      <form action="">
        <div class="btn-group btn-group btn-grupigjakut" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradiogrA" autocomplete="off" checked />
          <label class="btn btn-outline-danger" for="btnradiogrA">Grupi A</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradiogrB" autocomplete="off" />
          <label class="btn btn-outline-danger" for="btnradiogrB">Grupi B</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradiogrAB" autocomplete="off" />
          <label class="btn btn-outline-danger" for="btnradiogrAB">Grupi AB</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradiogr0" autocomplete="off" />
          <label class="btn btn-outline-danger" for="btnradiogr0">Grupi 0</label>
        </div>

        <div class="btn-group btn-group btn-rhd" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio1" id="btnradioneg" autocomplete="off" checked />
          <label class="btn btn-outline-danger" for="btnradioneg">Rhd neg (-)</label>

          <input type="radio" class="btn-check" name="btnradio1" id="btnradiopoz" autocomplete="off" />
          <label class="btn btn-outline-danger" for="btnradiopoz">Rhd poz (+)</label>
        </div>

        <div class="row row-info">
          <div class="kontaktit">
            <output>04*/***-***</output>
          </div>

          <div class="vendi">
            <output>**********</output>
          </div>
        </div>

        <div class="row row-sasia">
          <div class="sasia">
            <output>Nje doze permban 250-350ml </output>
          </div>

          <div class="doza">
            <input type="number" class="doza1" placeholder="Numri dozave" />
          </div>
        </div>

        <div class="btn-center">
          <button type="submit" class="btn btn-submit btn-danger">
            Shpall
          </button>
        </div>
      </form>
    </div>

    <div class="col-md-6" style="float: right">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="card card-kerkesa text-center border-danger mb-2" style="max-width: 18rem">
          <div class="card-header bg-danger">Header</div>
          <div class="card-body text-danger">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-danger">Fshij shpalljen</a>
          </div>
        </div>

        <div class="card card-kerkesa text-center border-danger mb-2" style="max-width: 18rem">
          <div class="card-header bg-danger">Header</div>
          <div class="card-body text-danger">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-danger">Fshij shpalljen</a>
          </div>
        </div>

        <div class="card card-kerkesa text-center border-danger mb-2" style="max-width: 18rem">
          <div class="card-header bg-danger">Header</div>
          <div class="card-body text-danger">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-danger">Fshij shpalljen</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>