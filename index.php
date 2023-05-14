<!DOCTYPE html>
<html lang="pt-br">
          <!-- -----LOCALIZATION----- -->
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
    <?php echo $langArray['page-title'] ;?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow fixed-top navbar-dark custom-bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Rafael Moreton</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#projects">
                    <?php echo $langArray['projects'] ;?>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">
                    <?php echo $langArray['about'] ;?>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#resume">
                    <?php echo $langArray['resume'] ;?>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">
                    <?php echo $langArray['contact'] ;?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
    </nav>

    <header class="scaffold custom-bg-light">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="text-center">
                        Rafael Moreton<span class="visually-hidden">:</span>
                        <br>
                        <strong class="text-capitalize">
                          <?php echo $langArray['role'] ;?>
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- -----PROJECTS----- -->
    <section id="projects" class="container-fluid custom-bg-dark">
      <div class="container">
        <h2 class="pt-3 fw-bold display-2 custom-text-highlight">
          <?php echo $langArray['projects'] ;?>
        </h2>
        <div class="row row-cols-1 row-cols-md-2">
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-chess.png" alt="CLI Chess project image">
              <h3>CLI Chess</h3>
              <p>
                <?php echo $langArray['chess-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-flight.png" alt="Flight Booker project image">
              <h3>Flight Booker</h3>
              <p>
                <?php echo $langArray['flight-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-events.png" alt="Private Events project image">
              <h3>Private Events</h3>
              <p>
                <?php echo $langArray['events-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-sketch.png" alt="Etch-a-Sketch project image">
              <h3>Etch-a-Sketch</h3>
              <p>
                <?php echo $langArray['sketch-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-connect.png" alt="Connect Four project image">
              <h3>Connect Four</h3>
              <p>
                <?php echo $langArray['connect-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-admin.png" alt="Admin Dashboard project image">
              <h3>Admin Dashboard</h3>
              <p>
                <?php echo $langArray['dashboard-project-description'];?>
              </p>
            </div>
          </article>
          <article class="col p-2">
            <div class="custom-bg-light container h-100 card">
              <img class="card-image img-fluid" src="./images/demo-calculator.png" alt="Calculator project image">
              <h3>Calculator</h3>
              <p>
                <?php echo $langArray['calculator-project-description'];?>
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- -----ABOUT----- -->
    <section id="about" class="container-fluid custom-bg-light">
      <div class="container">
        <h2 class="pt-3 fw-bold display-2 custom-text-highlight">
          <?php echo $langArray['about'] ;?>
        </h2>
        <p>
          <?php echo $langArray['about-p1'] ;?>
        </p>
        <p>
          <?php echo $langArray['about-p2'] ;?>
        </p>
        <p>
          <?php echo $langArray['about-p3'] ;?>
        </p>
        <p>
          <?php echo $langArray['about-p4'] ;?>
        </p>
      </div>
    </section>

    <!-- -----RESUME----- -->
    <section id="resume" class="container-fluid custom-bg-dark">
      <div class="container">
        <h2 class="pt-3 fw-bold display-2 custom-text-highlight">
          <?php echo $langArray['resume'] ;?>
        </h2>
      </div>
      <div class="container d-lg-none">
        <div class="custom-bg-light">
          <h3>
            <?php echo $langArray['summary'] ;?>
          </h3>
          <p>
            <?php echo $langArray['summary-p'] ;?>
          </p>
        </div>
        <div class="custom-bg-light">
          <h3>
            <?php echo $langArray['experience'] ;?>
          </h3>
          <h4>
            <?php echo $langArray['light-tech'] ;?>
          </h4>
            <p>
              <?php echo $langArray['light-tech-subhead'] ;?>
            </p>
            <ul>
                <li>
                  <?php echo $langArray['light-tech-info-1'] ;?>
                </li>
                <li>
                  <?php echo $langArray['light-tech-info-2'] ;?>
                </li>
                <li>
                  <?php echo $langArray['light-tech-info-3'] ;?>
                </li>
                <li>
                  <?php echo $langArray['light-tech-info-4'] ;?>
                </li>
            </ul>
            <h4>
              <?php echo $langArray['performer'] ;?>
            </h4>
            <p>
              <?php echo $langArray['performer-subhead'] ;?>
            </p>
            <ul>
                <li>
                  <?php echo $langArray['performer-info-1'] ;?>
                </li>
                <li>
                  <?php echo $langArray['performer-info-2'] ;?>
                </li>
            </ul>
            <h4>
              <?php echo $langArray['mech-tech'] ;?>
            </h4>
            <p>
              <?php echo $langArray['mech-tech-subhead'] ;?>
            </p>
            <ul>
                <li>
                  <?php echo $langArray['mech-tech-info-1'] ;?>
                </li>
                <li>
                  <?php echo $langArray['mech-tech-info-2'] ;?>
                </li>
                <li>
                  <?php echo $langArray['mech-tech-info-3'] ;?>
                </li>
                <li>
                  <?php echo $langArray['mech-tech-info-4'] ;?>
                </li>
            </ul>
        </div>
        <div class="custom-bg-light">
          <h3>
            <?php echo $langArray['education'] ;?>
          </h3>
          <h4>
            <?php echo $langArray['usp'] ;?>
          </h4>
          <p>
            <?php echo $langArray['usp-subhead'] ;?>
          </p>
          <p>2013-2020
            <?php echo $langArray['usp-info'] ;?>
          </p>
          <h4>
            <?php echo $langArray['spteatro'] ;?>
          </h4>
          <p>
            <?php echo $langArray['spteatro-subhead'] ;?>
          </p>
          <p>2017</p>
          <h4>
            <?php echo $langArray['ifsp'] ;?>
          </h4>
          <p>
            <?php echo $langArray['ifsp-subhead'] ;?>
          </p>
          <p>2012</p>
        </div>
        <div class="custom-bg-light">
          <h3>
            <?php echo $langArray['skills'] ;?>
          </h3>
          <ul>
            <li>HTML5, CSS3</li>
            <li>JavaScript</li>
            <li>Ruby / Rspec, Rails</li>
            <li>SQL</li>
            <li>Git / Github</li>
            <li>Heroku</li>
            <li>TDD</li>
            <li>OOP</li>
            <li>
              <?php echo $langArray['language'] ;?>
            </li>
            </ul>
        </div>
      </div>
      <!-- Display in two columns layout on large and bigger screens -->
      <div class="container d-none d-lg-block">
        <div class="row">
          <div class="col-4 p-0 d-flex flex-column">
            <div class="pb-3 flex-grow-1">
              <div class="p-3 custom-bg-light h-100">
                <h3>
                  <?php echo $langArray['summary'] ;?>
                </h3>
                <p>
                  <?php echo $langArray['summary-p'] ;?>
                </p>
              </div>
            </div>
            <div class="pb-3 flex-grow-1">
              <div class="p-3 custom-bg-light h-100">
                <h3>
                  <?php echo $langArray['education'] ;?>
                </h3>
                <h4>
                  <?php echo $langArray['usp'] ;?>
                </h4>
                <p>
                  <?php echo $langArray['usp-subhead'] ;?>
                </p>
                <p>2013-2020
                  <?php echo $langArray['usp-info'] ;?>
                </p>
                <h4>
                  <?php echo $langArray['spteatro'] ;?>
                </h4>
                <p>
                  <?php echo $langArray['spteatro-subhead'] ;?>
                </p>
                <p>2017</p>
                <h4>
                  <?php echo $langArray['ifsp'] ;?>
                </h4>
                <p>
                  <?php echo $langArray['ifsp-subhead'] ;?>
                </p>
                <p>2012</p>
              </div>
            </div>
            <div class="pb-3 flex-grow-1">
              <div class="p-3 custom-bg-light h-100">
                <h3>
                  <?php echo $langArray['skills'] ;?>
                </h3>
                <ul>
                  <li>HTML5, CSS3</li>
                  <li>JavaScript</li>
                  <li>Ruby / Rspec, Rails</li>
                  <li>SQL</li>
                  <li>Git / Github</li>
                  <li>Heroku</li>
                  <li>TDD</li>
                  <li>OOP</li>
                  <li>
                    <?php echo $langArray['language'] ;?>
                  </li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="ps-3 pb-3 col-8">
            <div class="p-3 h-100 custom-bg-light">
              <h3>
                <?php echo $langArray['experience'] ;?>
              </h3>
              <h4>
                <?php echo $langArray['light-tech'] ;?>
              </h4>
              <p>
                <?php echo $langArray['light-tech-subhead'] ;?>
              </p>
              <ul>
                  <li>
                    <?php echo $langArray['light-tech-info-1'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['light-tech-info-2'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['light-tech-info-3'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['light-tech-info-4'] ;?>
                  </li>
              </ul>
              <h4>
                <?php echo $langArray['performer'] ;?>
              </h4>
              <p>
                <?php echo $langArray['performer-subhead'] ;?>
              </p>
              <ul>
                  <li>
                    <?php echo $langArray['performer-info-1'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['performer-info-2'] ;?>
                  </li>
              </ul>
              <h4>
                <?php echo $langArray['mech-tech'] ;?>
              </h4>
              <p>
                <?php echo $langArray['mech-tech-subhead'] ;?>
              </p>
              <ul>
                  <li>
                    <?php echo $langArray['mech-tech-info-1'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['mech-tech-info-2'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['mech-tech-info-3'] ;?>
                  </li>
                  <li>
                    <?php echo $langArray['mech-tech-info-4'] ;?>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- -----CONTACT----- -->
    <section id="contact" class="container-fluid custom-bg-light">
      <div class="container">
        <h2 class="pt-3 fw-bold display-2 custom-text-highlight">
          <?php echo $langArray['contact'] ;?>
        </h2>
        <div>
          <a href="mailto:rafaelmoreton@gmail.com"
          class="d-flex gap-2 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <p class="m-0">rafaelmoreton@gmail.com</p>
          </a>
            <!-- <a href="https://github.com/rafaelmoreton">
              <p>Github</p>
              <svg xmlns="http://www.w3.org/2000/svg"
                width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0
                20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5
                4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
            </svg>
            </a> -->
          <a href="https://linkedin.com/in/rafael-moreton-baggio-3709b1217"
          class="d-flex gap-2 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
              <rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>
            </svg>
            <p class="m-0">LinkedIn</p>
          </a>
          <div class="d-flex gap-2 align-items-center justify-content-end">
           <p class="m-0" style="font-size: 0.9em;">
              <?php echo $langArray['address'] ;?>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg"
              width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
        </div>
        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia cum necessitatibus delectus nisi aliquam possimus, officia corrupti? Distinctio, ab inventore. Voluptate aut sapiente vel! Nobis ratione hic enim amet corporis.</p>
      </div>
    </section>

    <!-- -----BOOTSTRAP----- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>