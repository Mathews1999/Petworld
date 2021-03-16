<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petworld</title>
</head>
<body style="background-color: rgb(200, 243, 243);">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="Pictures\logo.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
            Petworld
          </a>   
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pets.php">Pets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
          </li>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                      <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                    </ul>
            </ul>
        </form>
      </div>
    </div>
  </nav>
  <marquee style="background-color:black;color:aliceblue;">High Breed pets are available for sales in low</marquee>

    <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Pictures\img2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-info">
                      <h3>Pets are to be Loved</h3>
                      <p>Best breed low price</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Pictures\img1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-info">
                      <h3>Pets are to be Loved</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Pictures\img3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-info">
                      <h3>Pets are to be Loved</h3>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="Pictures\dogsec.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Dogs</h5>
                      <p class="card-text">Dogs are the best friend of humans</p>
                      <a href="pets.php" class="btn btn-primary">Search</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="Pictures\catsec.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cat</h5>
                      <p class="card-text">Even cat are of great varieties</p>
                      <a href="pets.php" class="btn btn-primary">Search</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="Pictures\Fishsec.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Fish</h5>
                      <p class="card-text">Some sea fishes are also domesticated</p>
                      <a href="pets.php" class="btn btn-primary">Search</a>
                    </div>
                  </div>
                </div>
                <br><br>
                <div class="col">
                  <div class="card">
                    <img src="Pictures\birdsec.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Bird</h5>
                      <p class="card-text">Love the birds </p>
                      <a href="pets.php" class="btn btn-primary">Search</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
  </body>
  </html>