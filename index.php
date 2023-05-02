<!DOCTYPE html>
<html lang="pt-br">
          <?php
            if (!isset($_GET['langID']))
              $lang = 'en';
            else
              $lang = $_GET['langID'];
            include('locale/'. $lang . '.php');
          ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Document
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow fixed-top navbar-dark dark">
        <div class="container">
            <a class="navbar-brand" href="#">Rafael Moreton</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
    </nav>
    <header class="scaffold">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="text-center">
                        Rafael Moreton
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
      <h1>Projects</h1>
      <div>
        <h2>CLI Chess</h2>
        <p>
          <?php echo $langArray['chess-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Flight Booker</h2>
        <p>
          <?php echo $langArray['flight-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Private Events</h2>
        <p>
          <?php echo $langArray['events-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Etch-a-Sketch</h2>
        <p>
          <?php echo $langArray['sketch-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Connect Four</h2>
        <p>
          <?php echo $langArray['connect-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Admin Dashboard</h2>
        <p>
          <?php echo $langArray['dashboard-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
      <div>
        <h2>Calculator</h2>
        <p>
          <?php echo $langArray['calculator-project-description'];?>
        </p>
        <div>Placeholder</div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>