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
  <h1><ul><u>Dog</u></ul></h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="Pictures\retriever.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Golden Retriver</h5>
          <p class="card-text">Age:2 <br>High Breed <br>Price:35k.</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\husky.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Husky</h5>
          <p class="card-text">Age:1.5 <br>Blue Eye <br>Price:70k</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\spitz.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Spitz</h5>
          <p class="card-text">Age:2 <br>Snow White <br>Price:60k</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\labrador.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Labrador</h5>
          <p class="card-text">Age:5 months <br>certified <br>Price:20k</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
  </div>

  <h1><ul><u>Cat</u></ul></h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="Pictures\whiskers.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Whiskers</h5>
          <p class="card-text">Age:2 <br>High Breed <br>Price:35k.</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\scottishfold.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Scottish Fold</h5>
          <p class="card-text">Age:1.5 <br>Blue Eye <br>Price:70k</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\persiancat.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Persian Cat</h5>
          <p class="card-text">Age:2 <br>Snow White <br>Price:60k</p>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    </div>

    <h1><ul><u>Birds</u></ul></h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="Pictures\cocktail.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CockTail</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\greenparrot.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Green Parrot</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\lovebird.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Love Birds</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\macaw.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Macaw</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
  </div>

  <h1><ul><u>Fish</u></ul></h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="Pictures\fighterfish.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Fighter Fish</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\flowerhorn.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Flower Horn</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\Goldfish.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gold Fish</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Pictures\koicarp.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Koi Carp</h5>
          <a href="pets.php" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>